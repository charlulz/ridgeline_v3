<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmailSequence extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'trigger_event',
        'active',
        'delay_days',
    ];

    protected $casts = [
        'active' => 'boolean',
        'delay_days' => 'integer',
    ];

    public function emails()
    {
        return $this->hasMany(EmailSequenceEmail::class)->orderBy('order');
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
