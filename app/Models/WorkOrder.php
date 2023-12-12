<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkOrder extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function getCustomerSignatureAttribute($value)
    {
        return !empty($value) ? asset('storage/signatures/' . $value) : "";
    }

    public function getDefectsAttribute($value)
    {
        return !empty($value) ? asset('storage/defects/' . $value) : "";
    }

    public function getDriversLicenseAttribute($value)
    {
        return !empty($value) ? asset('storage/drivers_license/' . $value) : "";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
