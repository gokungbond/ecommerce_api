<?php

namespace App\Models\Transaction;

use App\Models\Transaction\Order;
use App\Models\MasterData\Product;
use App\Models\Transaction\OrderLine;
use App\Models\MasterData\ProductPrice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_price_id',
        'order_id',
        'order_line_id',
    ];

    public function product() : BelongsTo 
    {
        return $this->belongsTo(Product::class);
    }

    public function productPrice() : BelongsTo 
    {
        return $this->belongsTo(ProductPrice::class);
    }

    public function order() : BelongsTo 
    {
        return $this->belongsTo(Order::class);
    }

    public function orderLine() : BelongsTo 
    {
        return $this->belongsTo(OrderLine::class);
    }
}
