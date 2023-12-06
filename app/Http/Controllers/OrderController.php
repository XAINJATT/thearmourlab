<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductsOrder;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->subtotal = $request->input('subtotal');
        $order->tax = $request->input('tax');
        $order->total = $request->input('total');
        $order->payment_status = 'Pending';
        $order->save();
    
        $cartItemIds = explode(',', $request->input('cart_item_ids'));
    
        foreach ($cartItemIds as $itemId) {
            $productOrder = new ProductsOrder();
            $productOrder->order_id = $order->id;
            $productOrder->product_id = $itemId;
            $productOrder->save();
        }
    
        return redirect()->route('frontend.checkout', ['id' => $order->id]);
    }    

    public function Userstore(Request $request)
    {
        $userOrder = new UserOrder();
        $userOrder->order_id = $request->order_id;
        $userOrder->first_name = $request->input('first_name');
        $userOrder->last_name = $request->input('last_name');
        $userOrder->email = $request->input('email');
        $userOrder->phone = $request->input('phone');
        $userOrder->address = $request->input('address');
        $userOrder->country = $request->input('country');
        $userOrder->city = $request->input('city');
        $userOrder->state = $request->input('state');
        $userOrder->zip_code = $request->input('zip_code');
        $userOrder->save();

        return redirect()->route('stripe', ['id' => $request->order_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
