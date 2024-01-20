<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $filable = [
        'name',
        'price',
        'quantity',
        'description',
    ];

    public static function newFactory() : Factory
    {
        return ProductFactory::new();
    }
}
