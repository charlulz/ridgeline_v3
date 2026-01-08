<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmailSequenceEmail extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_sequence_id',
        'order',
        'subject',
        'content',
        'delay_days',
    ];

    protected $casts = [
        'order' => 'integer',
        'delay_days' => 'integer',
    ];

    public function sequence()
    {
        return $this->belongsTo(EmailSequence::class, 'email_sequence_id');
    }
}
