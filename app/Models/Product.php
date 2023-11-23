<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function getProductImageAttribute($value)
    {
        return !empty($value) ? asset('storage/products/' . $value) : "";
    }

    public function ProductImages(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
}
