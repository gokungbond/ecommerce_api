<?php

namespace App\Models\MasterData;

use App\Models\MasterData\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductInventory extends Model
{
    use HasFactory;

    protected $fillable =[
        'product_id',
        'quantity',
        'reorder_point',
        'active'
    ];

    public function product() : BelongsTo 
    {
        return $this->belongsTo(Product::class);
    }
}
