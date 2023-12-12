<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $cartItems = \Cart::getContent();
        $orderDetails = Order::where('id', $id)->first();
        return view('frontend.pages.checkout', compact('cartItems', 'orderDetails'));
    }
}
