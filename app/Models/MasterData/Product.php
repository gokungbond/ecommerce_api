<?php

namespace App\Models\MasterData;

use App\Models\User;
use App\Models\Transaction\OrderLine;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\MasterData\ProductFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\TransactionHistory\TransactionHistory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'hash',
        'brand',
        'supplier',
        'supplier_address',
        'supplier_contact',
        'product_inventory_id',
        'product_price_id',
        'category_id',
        'user_id'
    ];

    public static function newFactory() : Factory
    {
        return ProductFactory::new();
    }

    public function productCategory() : BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }

    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function productPrices() : HasMany 
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function productInventories() : HasMany 
    {
        return $this->hasMany(ProductInventory::class);
    }

    public function productImages() : HasMany 
    {
        return $this->hasMany(ProductImage::class);
    }

    public function orderLines() : HasMany 
    {
        return $this->hasMany(OrderLine::class);
    }

    public function transactionHistories() : HasMany 
    {
        return $this->hasMany(TransactionHistory::class);
    }

}
