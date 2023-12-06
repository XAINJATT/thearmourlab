<?php

namespace App\Http\Controllers;

use App\Models\UserOrder;
use App\Http\Requests\StoreUserOrderRequest;
use App\Http\Requests\UpdateUserOrderRequest;

class UserOrderController extends Controller
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
    public function store(StoreUserOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserOrder $userOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserOrder $userOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserOrderRequest $request, UserOrder $userOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserOrder $userOrder)
    {
        //
    }
}
