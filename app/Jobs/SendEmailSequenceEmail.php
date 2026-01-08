<?php

namespace App\Jobs;

use App\Models\Lead;
use App\Models\LeadEmailLog;
use App\Models\EmailSequenceEmail;
use App\Services\GoHighLevelService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailSequenceEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public Lead $lead,
        public EmailSequenceEmail $email,
        public ?int $sequenceId = null
    ) {
    }

    public function handle(GoHighLevelService $ghlService): void
    {
        try {
            // Create email log entry
            $log = LeadEmailLog::create([
                'lead_id' => $this->lead->id,
                'email_sequence_id' => $this->sequenceId,
                'email_sequence_email_id' => $this->email->id,
                'subject' => $this->email->subject,
                'status' => 'pending',
            ]);

            // If email is available, send via email
            if ($this->lead->email) {
                // Send email via GHL or Laravel Mail
                // For now, we'll use GHL's email functionality
                $emailSent = $ghlService->sendEmail(
                    $this->lead,
                    $this->email->subject,
                    $this->email->content
                );

                if ($emailSent) {
                    $log->update([
                        'status' => 'sent',
                        'sent_at' => now(),
                    ]);
                } else {
                    $log->update([
                        'status' => 'failed',
                        'error_message' => 'Failed to send via GHL',
                    ]);
                }
            } else {
                $log->update([
                    'status' => 'failed',
                    'error_message' => 'No email address for lead',
                ]);
            }

        } catch (\Exception $e) {
            Log::error('Failed to send email sequence email', [
                'lead_id' => $this->lead->id,
                'email_id' => $this->email->id,
                'error' => $e->getMessage(),
            ]);

            if (isset($log)) {
                $log->update([
                    'status' => 'failed',
                    'error_message' => $e->getMessage(),
                ]);
            }
        }
    }
}
