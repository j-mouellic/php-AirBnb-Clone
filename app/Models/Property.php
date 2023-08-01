<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "home_type",
        "city",
        "address",
        "postal_code",
        "picture",
        "bedrooms",
        "bathrooms",
        "surface",
        "price_per_night",
    ];
}
