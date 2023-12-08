<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WorkOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = WorkOrder::orderBy('id', 'DESC')->get();
        return view('admin.invoice.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 1)->where('status', 1)->get();
        return view('admin.invoice.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* - upload a document ( drivers license) */
        $FileImage = "";
        if ($request->has('drivers_license')) {
            $FileImage = 'DriversLicense-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('drivers_license')->extension();
            $request->file('drivers_license')->storeAs('public/drivers_license/', $FileImage);
        }

        // signature Image Start //
        if (!empty($request->signature &&  request("is_drawn") === true)) {
            $image_parts = explode(";base64,", $request->signature);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $signatureFileName = 'signature-' . Carbon::now()->format('Ymd-His') . '.' . $image_type;
            $signatureFilePath = 'public/signatures/' . $signatureFileName;
            Storage::put($signatureFilePath, $image_base64);
        }
        // signature Image End //

        // defects Image Start //
        if (request()->has("imgBase64")) {
            $base64_image = $request->input('imgBase64');
            $image_data = explode(';base64,', $base64_image);
            $image_type_aux_defects = explode("image/", $image_data[0]);
            $image_type_defects = $image_type_aux_defects[1];
            $image_base64_defects = base64_decode($image_data[1]);
            $signatureFileNameDefects = 'defects-' . Carbon::now()->format('Ymd-His') . '.' . $image_type_defects;
            $signatureFilePathDefects = 'public/defects/' . $signatureFileNameDefects;
            Storage::put($signatureFilePathDefects, $image_base64_defects);
        }
        // defects Image End //

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
            'customer_signature' => @$signatureFileName,
            'defects' => @$signatureFileNameDefects,
            'drivers_license' => $FileImage,

            // Ceramic Coating
            'ceramic_coating_kenzo_coating' => $request->has('ceramic_coating_kenzo_coating'),
            'ceramic_coating_quartz_plus_coating' => $request->has('ceramic_coating_quartz_plus_coating'),
            'ceramic_coating_quartz_coating' => $request->has('ceramic_coating_quartz_coating'),
            'ceramic_coating_premier_coating' => $request->has('ceramic_coating_premier_coating'),
            'ceramic_coating_interior_pkg' => $request->has('ceramic_coating_interior_pkg'),
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

            'additional_requests' => $request->input('additional_requests'),
            'total_price' => $request->input('total_price'),
            'mileage_in_price' => $request->input('mileage_in_price'),
            'note' => $request->input('note'),
            'int' => $request->input('int'),
            'payment_type' => $request->input('payment_type'),
            'date' => $request->input('date'),
        ];

        $order = WorkOrder::create($data);

        return redirect()->back()->with('success-message', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = WorkOrder::with('user')->where('id', $id)->first();
        return view('admin.invoice.view', compact('order', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = WorkOrder::with('user')->where('id', $id)->first();
        $users = User::where('role', 1)->where('status', 1)->get();
        return view('admin.invoice.edit', compact('order', 'users', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
        if (empty($request->work_order_id)) {
            return redirect()->back()->with('error-message', 'Invalid request');
        }

        $order = WorkOrder::findOrFail($request->work_order_id);

        /* Profile Picture */
        $FileImage = "";
        if (!empty($request->has('drivers_license'))) {
            if ($request['old_drivers_license'] != "") {
                $temp = explode("/", $request['old_drivers_license']);
                $fileName = end($temp);
                $Path = public_path('storage/drivers_license/') . $fileName;
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $FileImage = 'DriversLicense-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('drivers_license')->extension();
            $request->file('drivers_license')->storeAs('public/drivers_license/', $FileImage);
        } else {
            $temp = explode("/", $request['old_drivers_license']);
            $fileName = end($temp);
            $FileImage = $fileName;
        }




        // signature Image Start //
        $signatureFileName = "";
        if (!empty($request->signature)) {
            if ($request['old_signature'] != "") {
                $temp = explode("/", $request['old_signature']);
                $fileName = end($temp);
                $Path = public_path('storage/signatures/') . $fileName;
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $image_parts = explode(";base64,", $request->signature);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $signatureFileName = 'signature-' . Carbon::now()->format('Ymd-His') . '.' . $image_type;
            $signatureFilePath = 'public/signatures/' . $signatureFileName;
            Storage::put($signatureFilePath, $image_base64);
        } else {
            $temp = explode("/", $request['old_signature']);
            $fileName = end($temp);
            $signatureFileName = $fileName;
        }

        // dd(auth()->user()->isAdmin());

        if (!Auth::user()->isAdmin()) {
            $order->update([
                'customer_signature' => @$signatureFileName,
                'date' => $request->input('date'),
            ]);


            return redirect()->back()->with('success-message', 'Order updated successfully!');
        }

        // signature Image End //

        // defects Image Start //
        $signatureFileNameDefects = "";
        if ($request->input('imgBase64')) {
            if ($request['old_defects'] != "") {
                $temp = explode("/", $request['old_defects']);
                $fileName = end($temp);
                $Path = public_path('storage/defects/') . $fileName;
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $base64_image = $request->input('imgBase64');
            $image_data = explode(';base64,', $base64_image);
            $image_type_aux_defects = explode("image/", $image_data[0]);
            $image_type_defects = $image_type_aux_defects[1];
            $image_base64_defects = base64_decode($image_data[1]);
            $signatureFileNameDefects = 'defects-' . Carbon::now()->format('Ymd-His') . '.' . $image_type_defects;
            $signatureFilePathDefects = 'public/defects/' . $signatureFileNameDefects;
            Storage::put($signatureFilePathDefects, $image_base64_defects);
        } else {
            $temp = explode("/", $request['old_defects']);
            $fileName = end($temp);
            $signatureFileNameDefects = $fileName;
        }
        // defects Image End //

        $order->update([
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
            'status' => $request->input('status') ?? "General",
            'customer_signature' => @$signatureFileName,
            'defects' => @$signatureFileNameDefects,
            'drivers_license' => $FileImage,

            // Ceramic Coating
            'ceramic_coating_kenzo_coating' => $request->has('ceramic_coating_kenzo_coating'),
            'ceramic_coating_quartz_plus_coating' => $request->has('ceramic_coating_quartz_plus_coating'),
            'ceramic_coating_quartz_coating' => $request->has('ceramic_coating_quartz_coating'),
            'ceramic_coating_premier_coating' => $request->has('ceramic_coating_premier_coating'),
            'ceramic_coating_interior_pkg' => $request->has('ceramic_coating_interior_pkg'),
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

            'additional_requests' => $request->input('additional_requests'),
            'total_price' => $request->input('total_price'),
            'mileage_in_price' => $request->input('mileage_in_price'),
            'note' => $request->input('note'),
            'int' => $request->input('int'),
            'payment_type' => $request->input('payment_type'),
            'date' => $request->input('date'),
        ]);

        // dd($order);
        // Rest of your code...

        return redirect()->back()->with('success-message', 'Order updated successfully!');
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
