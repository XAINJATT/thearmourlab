<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WorkOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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


        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'id' => 'required', // Assuming 'id' is a required field
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'make' => 'required|string|max:255',
            'colour' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|numeric',
            'v_i_n' => 'required|string|max:255',
            'plate' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            // Handle your validation failure
            return redirect()->back()->withErrors($validator)->withInput();
        }

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
        if (request("imgBase64")  && !empty(request()->has("imgBase64"))) {
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

            // General Stages
            'general_stages' => $request->has('general_stages'),
            'check_in' => $request->has('check_in'),
            'initial_inspection' => $request->has('initial_inspection'),
            'Wash_and_decontamination' => $request->has('Wash_and_decontamination'),
            // General Stages Status
            'general_stages_status' => $request->input('general_stages_status'),
            'check_in_status' => $request->input('check_in_status'),
            'initial_inspection_status' => $request->input('initial_inspection_status'),
            'Wash_and_decontamination_status' => $request->input('Wash_and_decontamination_status'),

            // Paint Protection Film Stages
            'paint_protection_film_stages' => $request->has('paint_protection_film_stages'),
            'PPF_cutting_alignment' => $request->has('PPF_cutting_alignment'),
            'PPF_polish' => $request->has('PPF_polish'),
            'PPF_installation' => $request->has('PPF_installation'),
            'PPF_curing_phase' => $request->has('PPF_curing_phase'),
            // Paint Protection Film Stages Status
            'paint_protection_film_stages_status' => $request->input('paint_protection_film_stages_status'),
            'PPF_cutting_alignment_status' => $request->input('PPF_cutting_alignment_status'),
            'PPF_polish_status' => $request->input('PPF_polish_status'),
            'PPF_installation_status' => $request->input('PPF_installation_status'),
            'PPF_curing_phase_status' => $request->input('PPF_curing_phase_status'),

            // Ceramic Coating Stages
            'ceramic_coating_stages' => $request->has('ceramic_coating_stages'),
            'cc_ceramic_coating_rep' => $request->has('cc_ceramic_coating_rep'),
            'cc_paint_correction' => $request->has('cc_paint_correction'),
            'cc_ceramic_coating_application' => $request->has('cc_ceramic_coating_application'),
            'cc_curing_phase' => $request->has('cc_curing_phase'),
            // Ceramic Coating Stages Status
            'ceramic_coating_stages_status' => $request->input('ceramic_coating_stages_status'),
            'cc_ceramic_coating_rep_status' => $request->input('cc_ceramic_coating_rep_status'),
            'cc_paint_correction_status' => $request->input('cc_paint_correction_status'),
            'cc_ceramic_coating_application_status' => $request->input('cc_ceramic_coating_application_status'),
            'cc_curing_phase_status' => $request->input('cc_curing_phase_status'),

            // Window Tint Stages
            'window_tint_stages' => $request->has('window_tint_stages'),
            'window_tint_measurement_cut' => $request->has('window_tint_measurement_cut'),
            'window_tint_application' => $request->has('window_tint_application'),
            // Window Tint Stages Status
            'window_tint_stages_status' => $request->input('window_tint_stages_status'),
            'window_tint_measurement_cut_status' => $request->input('window_tint_measurement_cut_status'),
            'window_tint_application_status' => $request->input('window_tint_application_status'),

            // Final Stages
            'final_stages' => $request->has('final_stages'),
            'final_inspection' => $request->has('final_inspection'),
            'completion_pickup' => $request->has('completion_pickup'),
            // Final Stages Status
            'final_stages_status' => $request->input('final_stages_status'),
            'final_inspection_status' => $request->input('final_inspection_status'),
            'completion_pickup_status' => $request->input('completion_pickup_status'),

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
            'ppf_full_front_end' => $request->has('ppf_full_front_end'),
            'ppf_partial_front_end' => $request->has('ppf_partial_front_end'),
            'ppf_partial_kit' => $request->has('ppf_partial_kit'),
            'ppf_rockers' => $request->has('ppf_rockers'),
            'ppf_headlights' => $request->has('ppf_headlights'),
            'ppf_luggage_strip' => $request->has('ppf_luggage_strip'),
            'ppf_price' => $request->input('ppf_price'),

            // Window Tinting
            'wt_front_windows' => $request->has('wt_front_windows'),
            'wt_full_vehicle' => $request->has('wt_full_vehicle'),
            'wt_windshield' => $request->has('wt_windshield'),
            'wt_5' => $request->has('wt_5'),
            'wt_20' => $request->has('wt_20'),
            'wt_35' => $request->has('wt_35'),
            'wt_50' => $request->has('wt_50'),
            'wt_70' => $request->has('wt_70'),
            'wt_price' => $request->input('wt_price'),

            // Paint Correction
            'pc_one_stage' => $request->has('pc_one_stage'),
            'pc_two_stage' => $request->has('pc_two_stage'),
            'pc_three_stage' => $request->has('pc_three_stage'),
            'pc_wet_sand' => $request->has('pc_wet_sand'),
            'pc_price' => $request->input('pc_price'),

            // Other Services
            'os_interior_detailing' => $request->has('os_interior_detailing'),
            'os_car_wrap' => $request->has('os_car_wrap'),
            'os_rim_powder_coating' => $request->has('os_rim_powder_coating'),
            'os_rim_repair' => $request->has('os_rim_repair'),
            'os_dent_repair' => $request->has('os_dent_repair'),
            'os_caliper_painting' => $request->has('os_caliper_painting'),
            'os_price' => $request->input('os_price'),

            'additional_requests' => $request->input('additional_requests'),
            'total_price' => $request->input('total_price'),
            'mileage_in_price' => $request->input('mileage_in_price'),
            'note' => $request->input('note'),
            'int' => $request->input('int'),
            'payment_type' => $request->input('payment_type'),
            'date' => $request->input('date'),
        ];

        $order = WorkOrder::create($data);

        // dd($order);

        return redirect()->route('admin.invoice.edit', ['id' => $order->id])->with('success-message', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = WorkOrder::with('user')->where('id', $id)->first();
        $users = User::where('role', 1)->where('status', 1)->get();
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
            if ($request->is_drawn) {
                $image_parts = explode(";base64,", $request->signature);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $signatureFileName = 'signature-' . Carbon::now()->format('Ymd-His') . '.' . $image_type;
                $signatureFilePath = 'public/signatures/' . $signatureFileName;
                Storage::put($signatureFilePath, $image_base64);
            }
        } else {
            $temp = explode("/", $request['old_signature']);
            $fileName = end($temp);
            $signatureFileName = $fileName;
        }

        // dd(auth()->user()->isAdmin());

        if (!Auth::user()->isAdmin()) {
            $order->update([
                'customer_signature' => @$signatureFileName,
                'drivers_license' => $FileImage,
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

            // General Stages
            'general_stages' => $request->has('general_stages'),
            'check_in' => $request->has('check_in'),
            'initial_inspection' => $request->has('initial_inspection'),
            'Wash_and_decontamination' => $request->has('Wash_and_decontamination'),
            // General Stages Status
            'general_stages_status' => $request->input('general_stages_status'),
            'check_in_status' => $request->input('check_in_status'),
            'initial_inspection_status' => $request->input('initial_inspection_status'),
            'Wash_and_decontamination_status' => $request->input('Wash_and_decontamination_status'),

            // Paint Protection Film Stages
            'paint_protection_film_stages' => $request->has('paint_protection_film_stages'),
            'PPF_cutting_alignment' => $request->has('PPF_cutting_alignment'),
            'PPF_polish' => $request->has('PPF_polish'),
            'PPF_installation' => $request->has('PPF_installation'),
            'PPF_curing_phase' => $request->has('PPF_curing_phase'),
            // Paint Protection Film Stages Status
            'paint_protection_film_stages_status' => $request->input('paint_protection_film_stages_status'),
            'PPF_cutting_alignment_status' => $request->input('PPF_cutting_alignment_status'),
            'PPF_polish_status' => $request->input('PPF_polish_status'),
            'PPF_installation_status' => $request->input('PPF_installation_status'),
            'PPF_curing_phase_status' => $request->input('PPF_curing_phase_status'),

            // Ceramic Coating Stages
            'ceramic_coating_stages' => $request->has('ceramic_coating_stages'),
            'cc_ceramic_coating_rep' => $request->has('cc_ceramic_coating_rep'),
            'cc_paint_correction' => $request->has('cc_paint_correction'),
            'cc_ceramic_coating_application' => $request->has('cc_ceramic_coating_application'),
            'cc_curing_phase' => $request->has('cc_curing_phase'),
            // Ceramic Coating Stages Status
            'ceramic_coating_stages_status' => $request->input('ceramic_coating_stages_status'),
            'cc_ceramic_coating_rep_status' => $request->input('cc_ceramic_coating_rep_status'),
            'cc_paint_correction_status' => $request->input('cc_paint_correction_status'),
            'cc_ceramic_coating_application_status' => $request->input('cc_ceramic_coating_application_status'),
            'cc_curing_phase_status' => $request->input('cc_curing_phase_status'),

            // Window Tint Stages
            'window_tint_stages' => $request->has('window_tint_stages'),
            'window_tint_measurement_cut' => $request->has('window_tint_measurement_cut'),
            'window_tint_application' => $request->has('window_tint_application'),
            // Window Tint Stages Status
            'window_tint_stages_status' => $request->input('window_tint_stages_status'),
            'window_tint_measurement_cut_status' => $request->input('window_tint_measurement_cut_status'),
            'window_tint_application_status' => $request->input('window_tint_application_status'),

            // Final Stages
            'final_stages' => $request->has('final_stages'),
            'final_inspection' => $request->has('final_inspection'),
            'completion_pickup' => $request->has('completion_pickup'),
            // Final Stages Status
            'final_stages_status' => $request->input('final_stages_status'),
            'final_inspection_status' => $request->input('final_inspection_status'),
            'completion_pickup_status' => $request->input('completion_pickup_status'),

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
            'ppf_full_front_end' => $request->has('ppf_full_front_end'),
            'ppf_partial_front_end' => $request->has('ppf_partial_front_end'),
            'ppf_partial_kit' => $request->has('ppf_partial_kit'),
            'ppf_rockers' => $request->has('ppf_rockers'),
            'ppf_headlights' => $request->has('ppf_headlights'),
            'ppf_luggage_strip' => $request->has('ppf_luggage_strip'),
            'ppf_price' => $request->input('ppf_price'),

            // Window Tinting
            'wt_front_windows' => $request->has('wt_front_windows'),
            'wt_full_vehicle' => $request->has('wt_full_vehicle'),
            'wt_windshield' => $request->has('wt_windshield'),
            'wt_5' => $request->has('wt_5'),
            'wt_20' => $request->has('wt_20'),
            'wt_35' => $request->has('wt_35'),
            'wt_50' => $request->has('wt_50'),
            'wt_70' => $request->has('wt_70'),
            'wt_price' => $request->input('wt_price'),

            // Paint Correction
            'pc_one_stage' => $request->has('pc_one_stage'),
            'pc_two_stage' => $request->has('pc_two_stage'),
            'pc_three_stage' => $request->has('pc_three_stage'),
            'pc_wet_sand' => $request->has('pc_wet_sand'),
            'pc_price' => $request->input('pc_price'),

            // Additional Ceramic Coating
            'os_interior_detailing' => $request->has('os_interior_detailing'),
            'os_car_wrap' => $request->has('os_car_wrap'),
            'os_rim_powder_coating' => $request->has('os_rim_powder_coating'),
            'os_rim_repair' => $request->has('os_rim_repair'),
            'os_dent_repair' => $request->has('os_dent_repair'),
            'os_caliper_painting' => $request->has('os_caliper_painting'),
            'os_price' => $request->input('os_price'),

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
