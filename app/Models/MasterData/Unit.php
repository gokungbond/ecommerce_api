<?php

namespace App\Models;

use Database\Factories\UnitFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

     protected $fillable = [
        'code',
        'name',
    ];

    public static function newFactory() : Factory 
    {
        return UnitFactory::new();
    }
}
