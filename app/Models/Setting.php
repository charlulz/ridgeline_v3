<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'description',
    ];

    protected $casts = [
        'value' => 'string',
    ];

    /**
     * Get a setting value by key
     */
    public static function get(string $key, $default = null)
    {
        $cacheKey = "setting.{$key}";
        
        return Cache::rememberForever($cacheKey, function () use ($key, $default) {
            $setting = self::where('key', $key)->first();
            
            if (!$setting) {
                return $default;
            }

            return match($setting->type) {
                'boolean' => filter_var($setting->value, FILTER_VALIDATE_BOOLEAN),
                'integer' => (int) $setting->value,
                'json' => json_decode($setting->value, true),
                default => $setting->value ?? $default,
            };
        });
    }

    /**
     * Set a setting value
     */
    public static function set(string $key, $value, string $type = 'string', string $group = 'general', ?string $description = null): self
    {
        $setting = self::firstOrNew(['key' => $key]);
        
        $setting->value = match($type) {
            'boolean' => $value ? '1' : '0',
            'integer' => (string) $value,
            'json' => json_encode($value),
            default => (string) $value,
        };
        
        $setting->type = $type;
        $setting->group = $group;
        
        if ($description) {
            $setting->description = $description;
        }
        
        $setting->save();
        
        // Clear cache
        Cache::forget("setting.{$key}");
        
        return $setting;
    }

    /**
     * Get hero image setting
     */
    public static function getHeroImage(): ?string
    {
        return self::get('hero.image', 'hero-roof-replacement-worker.jpg');
    }

    /**
     * Get hero headline
     */
    public static function getHeroHeadline(): string
    {
        return self::get('hero.headline', "Don't Let Storm Damage\nDestroy Your Home");
    }

    /**
     * Get hero subheadline
     */
    public static function getHeroSubheadline(): string
    {
        return self::get('hero.subheadline', 'Quality roofing for the Tri-State Area - Kentucky, West Virginia, and Ohio. 15+ years of experience ensuring your home stays protected with the best materials and craftsmanship.');
    }

    /**
     * Check if alert is enabled
     */
    public static function isAlertEnabled(string $alertKey): bool
    {
        return self::get("alert.{$alertKey}.enabled", false);
    }

    /**
     * Get alert text
     */
    public static function getAlertText(string $alertKey): string
    {
        return self::get("alert.{$alertKey}.text", '');
    }

    /**
     * Get all settings by group
     */
    public static function getByGroup(string $group): array
    {
        return self::where('group', $group)
            ->get()
            ->mapWithKeys(function ($setting) {
                return [$setting->key => self::get($setting->key)];
            })
            ->toArray();
    }

    /**
     * Clear all settings cache
     */
    public static function clearCache(): void
    {
        self::all()->each(function ($setting) {
            Cache::forget("setting.{$setting->key}");
        });
    }
}
