<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WorkOrder;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = WorkOrder::where('user_id', Auth()->user()->id)->get();
        return view('user.invoice.index', compact('orders'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = WorkOrder::with('user')->where('id', $id)->first();
        return view('user.invoice.view', compact('order'));
    }

    public function orderStatusShow()
    {
        $id = request("id");
        $workOrderStatus = WorkOrder::find($id);
        return view('frontend.pages.live-status', compact('workOrderStatus'));
        // return view('user.invoice.orderStatusDetails', compact('workOrderStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
