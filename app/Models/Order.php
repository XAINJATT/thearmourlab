<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function ProductsOrder(){
        return $this->hasMany(ProductsOrder::class,'order_id','id');
    }

    public function userOrder()
    {
        return $this->belongsTo(UserOrder::class, 'order_id', 'id');
    }
        
}
