<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
        'is_active' => 'boolean'
    ];

    // protected function title(): Attribute
    // {
    //     return Attribute::make(
    //         set: function ($value) {
    //             return Strtolower($value);
    //         },
    //         get: fn($value) => ucfirst($value)
    //     );
    // }
}
