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

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
