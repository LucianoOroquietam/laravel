<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Post extends Model
{
    use HasFactory;

    /**
     * protected $table = 'posts';
     * si no le especifico con que tabla tiene que conectarse
     *
     * eloquent va a tomar como posible tabla el nombre de la clase
     * en plural y minuscula (posts)
     *
     * eloquent por si salo puede como mapear esa relacion sin establecerla
     * pero hay que nombrarlo en ingles.
     *
     */

    protected $casts = [
        // 'published_at' => 'datetime',
        'is_active' => 'boolean'
    ];

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return Strtolower($value);
            },
            get: fn($value) => ucfirst($value)
        );
    }
}
