<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class GoHighLevelWebhookController extends Controller
{
    /**
     * Handle incoming webhooks from GoHighLevel
     */
    public function handle(Request $request)
    {
        // Verify webhook signature if configured
        if (config('gohighlevel.webhook_secret')) {
            if (!$this->verifyWebhookSignature($request)) {
                Log::warning('Invalid GoHighLevel webhook signature');
                return response()->json(['error' => 'Invalid signature'], 401);
            }
        }

        $event = $request->input('type');
        $data = $request->input('payload', []);

        Log::info('GoHighLevel webhook received', [
            'event' => $event,
            'data' => $data,
        ]);

        switch ($event) {
            case 'contact.created':
            case 'contact.updated':
                $this->handleContactUpdate($data);
                break;
            
            case 'contact.stage_changed':
                $this->handleStageChange($data);
                break;
            
            case 'contact.note_added':
                $this->handleNoteAdded($data);
                break;
            
            default:
                Log::info('Unhandled GoHighLevel webhook event', ['event' => $event]);
        }

        return response()->json(['status' => 'success']);
    }

    /**
     * Handle contact created/updated events
     */
    protected function handleContactUpdate(array $data)
    {
        // Find lead by GHL contact ID
        $lead = \App\Models\Lead::where('ghl_contact_id', $data['contact']['id'] ?? null)->first();
        
        if ($lead) {
            // Update lead with data from GHL
            $updates = [];
            
            if (isset($data['contact']['email'])) {
                $updates['email'] = $data['contact']['email'];
            }
            
            if (isset($data['contact']['phone'])) {
                $updates['phone'] = $data['contact']['phone'];
            }
            
            if (!empty($updates)) {
                $lead->update($updates);
                
                Log::info('Lead updated from GoHighLevel webhook', [
                    'lead_id' => $lead->id,
                    'updates' => $updates,
                ]);
            }
        }
    }

    /**
     * Handle pipeline stage change
     */
    protected function handleStageChange(array $data)
    {
        $lead = \App\Models\Lead::where('ghl_contact_id', $data['contact']['id'] ?? null)->first();
        
        if ($lead && isset($data['stage']['name'])) {
            $stageName = $data['stage']['name'];
            $status = $this->mapStageToStatus($stageName);
            
            if ($status) {
                $lead->update(['status' => $status]);
                
                Log::info('Lead status updated from GoHighLevel stage change', [
                    'lead_id' => $lead->id,
                    'old_status' => $lead->getOriginal('status'),
                    'new_status' => $status,
                    'stage_name' => $stageName,
                ]);
            }
        }
    }

    /**
     * Handle note added event
     */
    protected function handleNoteAdded(array $data)
    {
        $lead = \App\Models\Lead::where('ghl_contact_id', $data['contact']['id'] ?? null)->first();
        
        if ($lead && isset($data['note']['body'])) {
            $note = $data['note']['body'];
            $existingNotes = $lead->notes ?? '';
            
            $lead->update([
                'notes' => $existingNotes . "\n\n[GHL] " . now()->format('Y-m-d H:i:s') . ": {$note}",
            ]);
            
            Log::info('Note added to lead from GoHighLevel', [
                'lead_id' => $lead->id,
            ]);
        }
    }

    /**
     * Map GoHighLevel stage name to lead status
     */
    protected function mapStageToStatus(string $stageName): ?string
    {
        $mapping = [
            'New Lead' => 'new',
            'Contacted' => 'contacted',
            'Qualified' => 'qualified',
            'Scheduled' => 'scheduled',
            'Proposal Sent' => 'proposal_sent',
            'Closed Won' => 'closed_won',
            'Closed Lost' => 'closed_lost',
        ];

        return $mapping[$stageName] ?? null;
    }

    /**
     * Verify webhook signature
     */
    protected function verifyWebhookSignature(Request $request): bool
    {
        $signature = $request->header('X-GHL-Signature');
        $secret = config('gohighlevel.webhook_secret');
        
        if (!$signature || !$secret) {
            return false;
        }

        $payload = $request->getContent();
        $expectedSignature = hash_hmac('sha256', $payload, $secret);

        return hash_equals($expectedSignature, $signature);
    }
}

