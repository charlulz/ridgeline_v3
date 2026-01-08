<?php

namespace App\Services;

use App\Models\Lead;
use App\Models\EmailSequence;
use App\Services\GoHighLevelService;
use App\Jobs\SendEmailSequenceEmail;
use Illuminate\Support\Facades\Log;

class LeadService
{
    public function __construct(
        private GoHighLevelService $ghlService
    ) {
    }

    public function createLead(array $data): Lead
    {
        // Create the lead
        $lead = Lead::create($data);
        
        // Calculate and update lead score
        $lead->updateLeadScore();
        
        // Sync to GoHighLevel
        try {
            $this->ghlService->createContact($lead);
        } catch (\Exception $e) {
            Log::error('Failed to sync lead to GoHighLevel', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);
        }
        
        // Log the lead creation
        Log::info('New lead created via LeadService', [
            'lead_id' => $lead->id,
            'name' => $lead->name,
            'phone' => $lead->phone,
            'property_type' => $lead->property_type,
            'lead_score' => $lead->lead_score,
            'source' => $lead->source,
            'ghl_contact_id' => $lead->ghl_contact_id,
        ]);

        // Trigger email sequences for new leads
        $this->triggerEmailSequences($lead, 'lead_created');
        
        return $lead;
    }
    
    public function getHighPriorityLeads()
    {
        return Lead::where('lead_score', '>=', 50)
            ->where('status', 'new')
            ->orderBy('lead_score', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
    }
    
    public function getLeadsByStatus(string $status)
    {
        return Lead::where('status', $status)
            ->orderBy('created_at', 'desc')
            ->get();
    }
    
    public function updateLeadStatus(Lead $lead, string $status, ?string $notes = null): void
    {
        $lead->update([
            'status' => $status,
            'notes' => $notes,
            'last_contacted_at' => now(),
        ]);
        
        // Sync status change to GoHighLevel
        try {
            $this->ghlService->updateContact($lead);
        } catch (\Exception $e) {
            Log::error('Failed to sync lead status update to GoHighLevel', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);
        }
        
        Log::info('Lead status updated', [
            'lead_id' => $lead->id,
            'old_status' => $lead->getOriginal('status'),
            'new_status' => $status,
            'notes' => $notes,
        ]);
    }
    
    public function getLeadStats(): array
    {
        return [
            'total_leads' => Lead::count(),
            'new_leads' => Lead::where('status', 'new')->count(),
            'high_priority_leads' => Lead::where('lead_score', '>=', 50)->where('status', 'new')->count(),
            'contacted_leads' => Lead::where('status', 'contacted')->count(),
            'qualified_leads' => Lead::where('status', 'qualified')->count(),
            'scheduled_leads' => Lead::where('status', 'scheduled')->count(),
            'closed_won' => Lead::where('status', 'closed_won')->count(),
            'closed_lost' => Lead::where('status', 'closed_lost')->count(),
            'avg_lead_score' => Lead::avg('lead_score') ?? 0,
        ];
    }
    
    public function getLeadsBySource(): array
    {
        return Lead::selectRaw('source, COUNT(*) as count')
            ->groupBy('source')
            ->orderBy('count', 'desc')
            ->get()
            ->pluck('count', 'source')
            ->toArray();
    }
    
    public function getLeadsByPropertyType(): array
    {
        return Lead::selectRaw('property_type, COUNT(*) as count')
            ->groupBy('property_type')
            ->orderBy('count', 'desc')
            ->get()
            ->pluck('count', 'property_type')
            ->toArray();
    }

    /**
     * Trigger email sequences based on event
     */
    protected function triggerEmailSequences(Lead $lead, string $event): void
    {
        $sequences = EmailSequence::active()
            ->where('trigger_event', $event)
            ->get();

        foreach ($sequences as $sequence) {
            $firstEmail = $sequence->emails()->orderBy('order')->first();
            
            if ($firstEmail && $lead->email) {
                // Schedule first email with sequence delay
                SendEmailSequenceEmail::dispatch($lead, $firstEmail, $sequence->id)
                    ->delay(now()->addDays($sequence->delay_days));
            }
        }
    }
}

