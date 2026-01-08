<?php

namespace App\Console\Commands;

use App\Models\Lead;
use App\Models\EmailSequence;
use App\Models\LeadEmailLog;
use App\Jobs\SendEmailSequenceEmail;
use Illuminate\Console\Command;
use Carbon\Carbon;

class ProcessEmailSequences extends Command
{
    protected $signature = 'email:process-sequences';
    protected $description = 'Process email sequences and send scheduled emails';

    public function handle(): void
    {
        $this->info('Processing email sequences...');

        // Get active sequences
        $sequences = EmailSequence::active()->get();

        foreach ($sequences as $sequence) {
            $this->processSequence($sequence);
        }

        $this->info('Email sequences processed.');
    }

    private function processSequence(EmailSequence $sequence): void
    {
        $leads = $this->getLeadsForSequence($sequence);

        foreach ($leads as $lead) {
            $this->processLeadSequence($lead, $sequence);
        }
    }

    private function getLeadsForSequence(EmailSequence $sequence)
    {
        return match ($sequence->trigger_event) {
            'lead_created' => Lead::where('created_at', '>=', now()->subDays($sequence->delay_days + 1))
                ->where('created_at', '<=', now()->subDays($sequence->delay_days))
                ->whereDoesntHave('emailLogs', function ($query) use ($sequence) {
                    $query->where('email_sequence_id', $sequence->id);
                })
                ->get(),
            'lead_not_contacted' => Lead::where('status', 'new')
                ->where('created_at', '<=', now()->subDays($sequence->delay_days))
                ->whereDoesntHave('emailLogs', function ($query) use ($sequence) {
                    $query->where('email_sequence_id', $sequence->id);
                })
                ->get(),
            default => collect([]),
        };
    }

    private function processLeadSequence(Lead $lead, EmailSequence $sequence): void
    {
        $emails = $sequence->emails;

        foreach ($emails as $index => $email) {
            // Check if this email has already been sent
            $alreadySent = LeadEmailLog::where('lead_id', $lead->id)
                ->where('email_sequence_email_id', $email->id)
                ->exists();

            if ($alreadySent) {
                continue;
            }

            // Calculate delay
            $delayMinutes = 0;
            
            if ($index === 0) {
                // First email uses sequence delay
                $delayMinutes = $sequence->delay_days * 24 * 60;
            } else {
                // Subsequent emails use their own delay
                $delayMinutes = $email->delay_days * 24 * 60;
            }

            // Dispatch job
            SendEmailSequenceEmail::dispatch($lead, $email, $sequence->id)
                ->delay(now()->addMinutes($delayMinutes));

            $this->info("Scheduled email '{$email->subject}' for lead {$lead->id}");
        }
    }
}
