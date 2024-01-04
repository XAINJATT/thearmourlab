<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contest extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function registeredUser(){ // UserContests
        return $this->hasMany(UserContests::class,'contest_id','id')
        ->where('user_id', auth()->user()->id)
        ->where('status', '!=', '2');
    }
    
    public function allRegisteredUser(){ // UserContests
        return $this->hasMany(UserContests::class,'contest_id','id')
        ->where('status', '!=', '2');
    }
}
