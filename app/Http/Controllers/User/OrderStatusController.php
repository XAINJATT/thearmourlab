<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WorkOrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderStatusController extends Controller
{
    public function index()
    {
        $workOrderStatus = WorkOrderStatus::join('work_orders', 'work_order_statuses.work_order_id', 'work_orders.id')
        ->where('work_orders.user_id', Auth()->user()->id)
        ->orderBy('work_order_statuses.id', 'DESC')
        ->select('work_order_statuses.id', 'work_order_statuses.work_order_id', 'work_order_statuses.car_name', 'work_order_statuses.status')
        ->get();
    
        return view('user.orderStatus.index', compact('workOrderStatus'));
    }

    public function show($id)
    {
        $workOrderStatus = WorkOrderStatus::find($id);
        return view('user.orderStatus.orderDetails', compact('workOrderStatus'));
    }
}
