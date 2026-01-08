<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'property_type',
        'property_address',
        'message',
        'urgency',
        'preferred_contact_time',
        'insurance_claim',
        'how_did_you_hear',
        'source',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'status',
        'lead_score',
        'last_contacted_at',
        'scheduled_at',
        'notes',
        'ghl_contact_id',
    ];

    protected $casts = [
        'last_contacted_at' => 'datetime',
        'scheduled_at' => 'datetime',
        'insurance_claim' => 'boolean',
    ];

    // Lead scoring logic
    public function calculateLeadScore(): int
    {
        $score = 0;
        
        // Base score for form submission
        $score += 10;
        
        // Property type scoring
        switch ($this->property_type) {
            case 'commercial':
                $score += 30; // Higher value projects
                break;
            case 'residential':
                $score += 20;
                break;
            case 'multi_unit':
                $score += 25;
                break;
            case 'not_sure':
                $score += 5;
                break;
        }
        
        // Source scoring
        switch ($this->source) {
            case 'referral':
                $score += 25; // Referrals convert better
                break;
            case 'phone':
                $score += 20; // Direct calls show high intent
                break;
            case 'website':
                $score += 15;
                break;
        }
        
        // Message urgency scoring
        if ($this->message) {
            $urgentKeywords = ['emergency', 'urgent', 'storm', 'damage', 'leak', 'immediate'];
            foreach ($urgentKeywords as $keyword) {
                if (stripos($this->message, $keyword) !== false) {
                    $score += 15;
                    break;
                }
            }
        }
        
        return min($score, 100); // Cap at 100
    }

    // Update lead score
    public function updateLeadScore(): void
    {
        $this->lead_score = $this->calculateLeadScore();
        $this->save();
    }

    // Check if lead is high priority
    public function isHighPriority(): bool
    {
        return $this->lead_score >= 50;
    }

    // Get status label
    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'new' => 'New Lead',
            'contacted' => 'Contacted',
            'qualified' => 'Qualified',
            'scheduled' => 'Scheduled',
            'proposal_sent' => 'Proposal Sent',
            'closed_won' => 'Closed Won',
            'closed_lost' => 'Closed Lost',
            default => 'Unknown'
        };
    }

    // Get property type label
    public function getPropertyTypeLabelAttribute(): string
    {
        return match($this->property_type) {
            'residential' => 'Residential Home',
            'commercial' => 'Commercial Building',
            'multi_unit' => 'Multi-Unit Property',
            'not_sure' => 'Not Sure',
            default => 'Not Specified'
        };
    }

    public function emailLogs()
    {
        return $this->hasMany(LeadEmailLog::class);
    }
}
