<?php

namespace App\Models\MasterData;

use Database\Factories\MasterData\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'active'
    ];

    public static function newFactory() : Factory 
    {
        return CategoryFactory::new();
    }
}
