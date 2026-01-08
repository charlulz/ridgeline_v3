<?php

namespace App\Services;

use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;

class GoHighLevelService
{
    protected ?string $apiKey;
    protected ?string $locationId;
    protected string $baseUrl;

    public function __construct()
    {
        $this->apiKey = Config::get('gohighlevel.api_key');
        $this->locationId = Config::get('gohighlevel.location_id');
        $this->baseUrl = Config::get('gohighlevel.base_url', 'https://services.leadconnectorhq.com');
    }

    /**
     * Create a contact in GoHighLevel from a Lead
     */
    public function createContact(Lead $lead): ?string
    {
        if (!$this->isConfigured()) {
            Log::warning('GoHighLevel not configured, skipping contact creation', [
                'lead_id' => $lead->id,
            ]);
            return null;
        }

        try {
            $tags = $this->buildTags($lead);
            $customFields = $this->buildCustomFields($lead);
            $stage = $this->getPipelineStage($lead->status);

            $payload = [
                'firstName' => $this->extractFirstName($lead->name),
                'lastName' => $this->extractLastName($lead->name),
                'email' => $lead->email,
                'phone' => $this->formatPhone($lead->phone),
                'source' => $lead->source ?? 'website',
                'tags' => $tags,
                'customFields' => $customFields,
            ];

            // Add pipeline stage if pipeline ID is configured
            if ($pipelineId = Config::get('gohighlevel.pipeline_id')) {
                $payload['pipelineId'] = $pipelineId;
                if ($stage) {
                    $payload['stageId'] = $stage;
                }
            }

            $response = Http::withHeaders([
                'Authorization' => "Bearer {$this->apiKey}",
                'Version' => '2021-07-28',
            ])->post("{$this->baseUrl}/contacts/", $payload);

            if ($response->successful()) {
                $contactId = $response->json('contact.id');
                
                // Update lead with GHL contact ID
                $lead->update(['ghl_contact_id' => $contactId]);

                Log::info('Contact created in GoHighLevel', [
                    'lead_id' => $lead->id,
                    'ghl_contact_id' => $contactId,
                ]);

                return $contactId;
            } else {
                Log::error('Failed to create contact in GoHighLevel', [
                    'lead_id' => $lead->id,
                    'status' => $response->status(),
                    'response' => $response->body(),
                ]);

                return null;
            }
        } catch (\Exception $e) {
            Log::error('Exception creating GoHighLevel contact', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    /**
     * Update a contact in GoHighLevel
     */
    public function updateContact(Lead $lead): bool
    {
        if (!$this->isConfigured() || !$lead->ghl_contact_id) {
            return false;
        }

        try {
            $tags = $this->buildTags($lead);
            $customFields = $this->buildCustomFields($lead);
            $stage = $this->getPipelineStage($lead->status);

            $payload = [
                'firstName' => $this->extractFirstName($lead->name),
                'lastName' => $this->extractLastName($lead->name),
                'email' => $lead->email,
                'phone' => $this->formatPhone($lead->phone),
                'tags' => $tags,
                'customFields' => $customFields,
            ];

            // Update pipeline stage if pipeline ID is configured
            $pipelineId = Config::get('gohighlevel.pipeline_id');
            if ($pipelineId && $stage) {
                $payload['pipelineId'] = $pipelineId;
                $payload['stageId'] = $stage;
            }

            $response = Http::withHeaders([
                'Authorization' => "Bearer {$this->apiKey}",
                'Version' => '2021-07-28',
            ])->put("{$this->baseUrl}/contacts/{$lead->ghl_contact_id}", $payload);

            if ($response->successful()) {
                Log::info('Contact updated in GoHighLevel', [
                    'lead_id' => $lead->id,
                    'ghl_contact_id' => $lead->ghl_contact_id,
                ]);

                return true;
            } else {
                Log::error('Failed to update contact in GoHighLevel', [
                    'lead_id' => $lead->id,
                    'status' => $response->status(),
                    'response' => $response->body(),
                ]);

                return false;
            }
        } catch (\Exception $e) {
            Log::error('Exception updating GoHighLevel contact', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);

            return false;
        }
    }

    /**
     * Add a note to a contact in GoHighLevel
     */
    public function addNote(string $contactId, string $note): bool
    {
        if (!$this->isConfigured()) {
            return false;
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => "Bearer {$this->apiKey}",
                'Version' => '2021-07-28',
            ])->post("{$this->baseUrl}/contacts/{$contactId}/notes", [
                'body' => $note,
            ]);

            return $response->successful();
        } catch (\Exception $e) {
            Log::error('Exception adding note to GoHighLevel contact', [
                'contact_id' => $contactId,
                'error' => $e->getMessage(),
            ]);

            return false;
        }
    }

    /**
     * Build tags array for GoHighLevel
     */
    protected function buildTags(Lead $lead): array
    {
        $tags = [Config::get('gohighlevel.default_tags.website_lead')];

        // Add property type tag
        if ($lead->property_type) {
            $propertyTypeTag = Config::get("gohighlevel.default_tags.{$lead->property_type}");
            if ($propertyTypeTag) {
                $tags[] = $propertyTypeTag;
            }
        }

        // Add high priority tag
        if ($lead->isHighPriority()) {
            $tags[] = Config::get('gohighlevel.default_tags.high_priority');
        }

        // Add emergency tag if message contains urgent keywords
        if ($lead->message) {
            $urgentKeywords = ['emergency', 'urgent', 'storm', 'damage', 'leak', 'immediate'];
            foreach ($urgentKeywords as $keyword) {
                if (stripos($lead->message, $keyword) !== false) {
                    $tags[] = Config::get('gohighlevel.default_tags.emergency');
                    break;
                }
            }
        }

        // Add source tag
        if ($lead->source && $lead->source !== 'website') {
            $tags[] = ucfirst($lead->source) . ' Lead';
        }

        return array_unique($tags);
    }

    /**
     * Build custom fields array for GoHighLevel
     */
    protected function buildCustomFields(Lead $lead): array
    {
        $customFields = [];
        $fieldMapping = Config::get('gohighlevel.custom_fields');

        foreach ($fieldMapping as $leadField => $ghlField) {
            $value = $lead->{$leadField};
            if ($value !== null) {
                $customFields[$ghlField] = (string) $value;
            }
        }

        return $customFields;
    }

    /**
     * Get pipeline stage ID based on lead status
     */
    protected function getPipelineStage(string $status): ?string
    {
        $stageName = Config::get("gohighlevel.pipeline_stages.{$status}");
        
        // Note: In a real implementation, you might want to fetch actual stage IDs
        // from GoHighLevel API. For now, we'll return the stage name.
        // You may need to create a method to map stage names to IDs.
        
        return $stageName;
    }

    /**
     * Extract first name from full name
     */
    protected function extractFirstName(string $fullName): string
    {
        $parts = explode(' ', trim($fullName));
        return $parts[0] ?? $fullName;
    }

    /**
     * Extract last name from full name
     */
    protected function extractLastName(string $fullName): string
    {
        $parts = explode(' ', trim($fullName));
        if (count($parts) > 1) {
            return implode(' ', array_slice($parts, 1));
        }
        return '';
    }

    /**
     * Format phone number for GoHighLevel
     */
    protected function formatPhone(string $phone): string
    {
        // Remove all non-numeric characters
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // If it's 10 digits, assume US number and add +1
        if (strlen($phone) === 10) {
            return '+1' . $phone;
        }
        
        // If it already starts with +, return as is
        if (strpos($phone, '+') === 0) {
            return $phone;
        }
        
        // Otherwise, assume it's already formatted correctly
        return $phone;
    }

    /**
     * Check if GoHighLevel is properly configured
     */
    protected function isConfigured(): bool
    {
        return !empty($this->apiKey) && !empty($this->locationId);
    }

    /**
     * Send email to a contact via GoHighLevel
     */
    public function sendEmail(Lead $lead, string $subject, string $content): bool
    {
        if (!$this->isConfigured()) {
            Log::warning('GoHighLevel not configured, skipping email send', [
                'lead_id' => $lead->id,
            ]);
            return false;
        }

        if (!$lead->email) {
            Log::warning('No email address for lead', [
                'lead_id' => $lead->id,
            ]);
            return false;
        }

        try {
            // If contact doesn't exist in GHL, create it first
            if (!$lead->ghl_contact_id) {
                $contactId = $this->createContact($lead);
                if (!$contactId) {
                    return false;
                }
            }

            // Use GHL's email API to send email
            $response = Http::withHeaders([
                'Authorization' => "Bearer {$this->apiKey}",
                'Content-Type' => 'application/json',
            ])->post("{$this->baseUrl}/contacts/{$lead->ghl_contact_id}/emails", [
                'subject' => $subject,
                'htmlBody' => $content,
                'textBody' => strip_tags($content),
            ]);

            if ($response->successful()) {
                Log::info('Email sent via GoHighLevel', [
                    'lead_id' => $lead->id,
                    'subject' => $subject,
                ]);
                return true;
            } else {
                Log::error('Failed to send email via GoHighLevel', [
                    'lead_id' => $lead->id,
                    'status' => $response->status(),
                    'response' => $response->body(),
                ]);
                return false;
            }
        } catch (\Exception $e) {
            Log::error('Exception sending email via GoHighLevel', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);
            return false;
        }
    }
}

