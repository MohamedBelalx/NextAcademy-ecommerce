<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['title', 'decription', 'img', 'price', 'stock', 'merchant_id', 'trade_mark_id'];
    protected $with = ['tradeMarks'];
    public function tradeMarks()
    {
        return $this->belongsTo(TradeMark::class, 'trade_mark_id');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'product_id');
    }
}
