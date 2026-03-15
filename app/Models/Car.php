<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['name', 'image', 'price', 'capacity', 'description'];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
        ];
    }
}
