<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    public function index()
    {
        return view('user.orderStatus.index');
    }

    public function orderDetails()
    {
        return view('user.orderStatus.orderDetails');
    }
}
