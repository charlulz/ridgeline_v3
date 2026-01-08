<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeadEmailLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'email_sequence_id',
        'email_sequence_email_id',
        'subject',
        'status',
        'sent_at',
        'opened_at',
        'clicked_at',
        'error_message',
    ];

    protected $casts = [
        'sent_at' => 'datetime',
        'opened_at' => 'datetime',
        'clicked_at' => 'datetime',
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function sequence()
    {
        return $this->belongsTo(EmailSequence::class);
    }

    public function email()
    {
        return $this->belongsTo(EmailSequenceEmail::class, 'email_sequence_email_id');
    }
}
