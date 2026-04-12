<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TourPackage extends Model
{
    protected $fillable = ['title', 'slug', 'category', 'price', 'duration', 'description', 'itinerary', 'facilities', 'image'];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'facilities' => 'array',
        ];
    }

    /**
     * Ensure slug is unique by appending -2, -3, … when the base slug already exists.
     */
    public static function uniqueSlug(string $base, ?int $exceptId = null): string
    {
        $slug = Str::slug($base);
        if ($slug === '') {
            $slug = 'paket';
        }

        $candidate = $slug;
        $n = 2;
        while (static::query()
            ->when($exceptId !== null, fn ($q) => $q->where('id', '!=', $exceptId))
            ->where('slug', $candidate)
            ->exists()) {
            $candidate = $slug . '-' . $n;
            $n++;
        }

        return $candidate;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $base = ($model->slug !== null && $model->slug !== '')
                ? (string) $model->slug
                : (string) $model->title;
            $model->slug = static::uniqueSlug($base, null);
        });

        static::updating(function ($model) {
            if ($model->isDirty('slug')) {
                $base = ($model->slug !== null && $model->slug !== '')
                    ? (string) $model->slug
                    : (string) $model->title;
                $model->slug = static::uniqueSlug($base, $model->getKey());
            }
        });
    }
}
