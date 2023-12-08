<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProductsOrder;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class ShopOrdersController extends Controller
{
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            $orders = Order::where('payment_status', 'Paid')->get();
            return view('admin.shopOrder.index', compact('orders'));
        } else {
            $orders = Order::where('payment_status', 'Paid')->where("user_id", auth()->user()->id)->get();
            return view('user.shopOrder.index', compact('orders'));
        }
    }

    public function show($id)
    {
        $order = Order::with('ProductsOrder', 'UserOrder')->where('payment_status', 'Paid')->where('id', $id)->first();
        $userOrder = UserOrder::where('order_id', $order->id)->first();
        $ProductsOrder = ProductsOrder::where('products_orders.order_id', $order->id)
            ->get();
        return view('admin.shopOrder.view', compact('order', 'userOrder', 'ProductsOrder'));
    }

    public function delete($id)
    {
        // Get the existing product details
        $userDetails = Order::where('id', $id)->delete();

        if ($userDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }
}
