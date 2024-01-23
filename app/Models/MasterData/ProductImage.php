<?php

namespace App\Models\MasterData;

use App\Models\MasterData\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'thumbnail',
        'image',
        'display_in_list',
        'active'
    ];

    public function product() : BelongsTo 
    {
        return $this->belongsTo(Product::class);
    }
}
