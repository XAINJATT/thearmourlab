<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blog extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function getImageAttribute($value)
    {
        return !empty($value) ? asset('storage/blogs/' . $value) : "";
    }

    public function getBlogWriterPictureAttribute($value)
    {
        return !empty($value) ? asset('storage/blogs/' . $value) : "";
    }
}
