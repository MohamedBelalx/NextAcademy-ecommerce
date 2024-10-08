<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeMark extends Model
{
    use HasFactory;
    protected $table = 'trade_mark';
    protected $fillable = ['title'];

    public function products(){
        return $this->hasMany(Products::class,'trade_mark_id');
    }
}
