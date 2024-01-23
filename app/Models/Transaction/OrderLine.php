<?php

namespace App\Models\Transaction;

use App\Models\MasterData\Product;
use App\Models\MasterData\ProductPrice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderLine extends Model
{
    use HasFactory;

    protected $fillable =[
        'order_id',
        'product_id',
        'product_price_id',
        'quantity',
        'price',
        'discount',
        'discount_amount',
        'mark_up',
        'totals'
    ];

    public function order() : BelongsTo 
    {
        return $this->belongsTo(Order::class);
    }

    public function product() : BelongsTo 
    {
        return $this->belongsTo(Product::class);
    }

    public function productPrice() : BelongsTo 
    {
        return $this->belongsTo(ProductPrice::class);
    }

}
