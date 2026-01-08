<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'content',
        'rating',
        'source',
        'source_url',
        'photo',
        'featured',
        'approved',
        'order',
    ];

    protected $casts = [
        'rating' => 'integer',
        'featured' => 'boolean',
        'approved' => 'boolean',
        'order' => 'integer',
    ];

    public function scopeApproved($query)
    {
        return $query->where('approved', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at', 'desc');
    }
}
