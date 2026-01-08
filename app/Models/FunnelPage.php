<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class FunnelPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'campaign_name',
        'headline',
        'subheadline',
        'content',
        'hero_image',
        'form_type',
        'offer_details',
        'thank_you_page',
        'active',
        'track_conversions',
        'meta_title',
        'meta_description',
        'views',
        'conversions',
    ];

    protected $casts = [
        'offer_details' => 'array',
        'active' => 'boolean',
        'track_conversions' => 'boolean',
        'views' => 'integer',
        'conversions' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            if (empty($page->slug)) {
                $page->slug = Str::slug($page->name);
            }
        });

        static::updating(function ($page) {
            if ($page->isDirty('name') && empty($page->slug)) {
                $page->slug = Str::slug($page->name);
            }
        });
    }

    public function incrementViews()
    {
        $this->increment('views');
    }

    public function incrementConversions()
    {
        $this->increment('conversions');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
