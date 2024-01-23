<?php

namespace App\Models\Transaction;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable =[
        'date',
        'order_number',
        'remarks',
        'order_by_id'
    ];

    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'order_by_id');
    }

    public function orderLines() : HasMany 
    {
        return $this->hasMany(OrderLine::class);
    }

}
