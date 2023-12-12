<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkOrderStatus extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(WorkOrder::class, 'work_order_id', 'id');
    }
}
