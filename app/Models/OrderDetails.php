<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'orders_details';
    protected $fillable = ['product_id', 'merchant_id', 'order_id', 'quantity'];
    protected $with = ['merchant', 'products'];
    public function orders()
    {
        return $this->BelongsTo(Order::class, 'order_id');
    }
    public function merchant()
    {
        return $this->belongsTo(User::class, 'merchant_id');
    }
    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
