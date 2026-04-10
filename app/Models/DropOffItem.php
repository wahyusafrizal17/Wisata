<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DropOffItem extends Model
{
    protected $fillable = [
        'title',
        'image',
        'price',
        'description',
        'order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }
}

