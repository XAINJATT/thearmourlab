<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warranty extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function getInstallerSignatureAttribute($value)
    {
        return !empty($value) ? asset('storage/' . $value) : "";
    }

}
