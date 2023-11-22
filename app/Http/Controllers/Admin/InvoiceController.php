<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WorkOrder;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = WorkOrder::all();
        return view('admin.invoice.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 1)->get();
        return view('admin.invoice.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'user_id' => $request->input('id'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'make' => $request->input('make'),
            'colour' => $request->input('colour'),
            'phone' => $request->input('phone'),
            'model' => $request->input('model'),
            'year' => $request->input('year'),
            'email' => $request->input('email'),
            'v_i_n' => $request->input('v_i_n'),
            'plate' => $request->input('plate'),

            // Ceramic Coating
            'ceramic_coating_kenzo_coating' => $request->has('ceramic_coating_kenzo_coating'),
            'ceramic_coating_quartz_plus_coating' => $request->has('ceramic_coating_quartz_plus_coating'),
            'ceramic_coating_quartz_coating' => $request->has('ceramic_coating_quartz_coating'),
            'ceramic_coating_premier_coating' => $request->has('ceramic_coating_premier_coating'),
            'ceramic_coating_interior_pkg' => $request->has('ceramic_coating_interior?_pkg'),
            'ceramic_coating_wheels_of_pkg' => $request->has('ceramic_coating_wheels_of_pkg'),
            'ceramic_coating_price' => $request->input('ceramic_coating_price'),
    
            // PPF
            'ppf_full_car' => $request->has('ppf_full_car'),
            'ppf_client_notes' => $request->has('ppf_client_notes'),
            'ppf_payment_stub' => $request->has('ppf_payment_stub'),
            'ppf_payment_terms' => $request->has('ppf_payment_terms'),
            'ppf_price' => $request->input('ppf_price'),
    
            // Additional Ceramic Coating
            'cc_payment_terms' => $request->has('cc_payment_terms'),
            'cc_client_notes' => $request->has('cc_client_notes'),
            'cc_payment_stub' => $request->has('cc_payment_stub'),
            'cc_price' => $request->input('cc_price'),
        ];
    
        $order = WorkOrder::create($data);
    
        return redirect()->route('admin.invoice')->with('success-message', 'Order created successfully!');
    }    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function delete($id)
    {
        // Get the existing product details
        $userDetails = WorkOrder::where('id', $id)->delete();

        if ($userDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }
}
