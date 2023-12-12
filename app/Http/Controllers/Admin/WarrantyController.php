<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Warranty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warranties = Warranty::all();
        return view('admin.warranty.index', compact('warranties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 1)->where('status', 1)->get();
        return view('admin.warranty.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */

    // public function store(Request $request)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         'first_name' => 'required|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'tel' => 'required|string|max:20',
    //         'make' => 'required|string|max:255',
    //         'model' => 'required|string|max:255',
    //         'year' => 'required|string|max:4',
    //         'colour' => 'required|string|max:255',
    //         'vin' => 'required|string|max:255',
    //         'exterior_package' => 'required|string|max:255',
    //         'interior' => 'required|string|max:255',
    //         'windows' => 'required|string|max:255',
    //         'wheels' => 'required|string|max:255',
    //         'trim' => 'required|string|max:255',
    //         'paint_correction' => 'required|string|max:255',
    //         'body' => 'required|string|max:255',
    //         'coating_duration' => 'required|string|max:255',
    //         'full_front_end' => 'boolean',
    //         'partial_front_end' => 'boolean',
    //         'full_body' => 'boolean',
    //         'attitionl_panels' => 'required|string|max:255',
    //         'ppf_brand' => 'required|string|max:255',
    //         'roll_serial_number' => 'required|string|max:255',
    //         'warranty_duration' => 'required|string|max:255',
    //         'installer' => 'required|string|max:255',
    //         'date_of_installation' => 'required|date',
    //     ]);

    //     // Handle the uploaded video
    //     if ($request->hasFile('installer_signature')) {
    //         $signaturePath = $request->file('installer_signature')->store('signatures', 'public');
    //     } else {
    //         $signaturePath = null;
    //     }

    //     // Add the signature path to the validated data
    //     $validatedData['installer_signature'] = $signaturePath;

    //     // Create a new warranty record
    //     Warranty::create($validatedData);

    //     return redirect()->route('admin.warranty')->with('success-message', 'Warranty created Successfully!');
    // }

    public function store(Request $request)
    {

        $signatureFileName = NULL;

        if ($request->is_drawn) {
            $image_parts = explode(";base64,", $request->signature);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);

            $signatureFileName = 'signature-' . Carbon::now()->format('Ymd-His') . '.' . $image_type;
            $signatureFilePath = 'public/signatures/' . $signatureFileName;
            // Save the signature image
            Storage::put($signatureFilePath, $image_base64);
        }
        $logData = $request->only(['date', 'annualInspection', 'productUsed', 'performedBy', 'notes']);

        // Combine the log data into associative arrays for each entry
        $logs = [];
        foreach ($logData['date'] as $index => $date) {
            $logs[] = [
                'date' => $date,
                'annualInspection' => $logData['annualInspection'][$index],
                'productUsed' => $logData['productUsed'][$index],
                'performedBy' => $logData['performedBy'][$index],
                'notes' => $logData['notes'][$index],
            ];
        }

        $jsonLogs = json_encode($logs);




        // Create a new warranty record without validation
        Warranty::create([
            'user_id' => $request->input('id'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'year' => $request->input('year'),
            'colour' => $request->input('colour'),
            'vin' => $request->input('vin'),
            'exterior_package' => $request->input('exterior_package'),
            'interior' => $request->input('interior'),
            'windows' => $request->input('windows'),
            'wheels' => $request->input('wheels'),
            'trim' => $request->input('trim'),
            'paint_correction' => $request->input('paint_correction'),
            'body' => $request->input('body'),
            'coating_duration' => $request->input('coating_duration'),
            'full_front_end' => $request->input('full_front_end'),
            'partial_front_end' => $request->input('partial_front_end'),
            'full_body' => $request->input('full_body'),
            'attitionl_panels' => $request->input('attitionl_panels'),
            'ppf_brand' => $request->input('ppf_brand'),
            'roll_serial_number' => $request->input('roll_serial_number'),
            'warranty_duration' => $request->input('warranty_duration'),
            'installer' => $request->input('installer'),
            'date_of_installation' => $request->input('date_of_installation'),
            'installer_signature' => $signatureFileName,
            'log_data' => $jsonLogs
        ]);

        return redirect()->route('admin.warranty')->with('success-message', 'Warranty created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $warranty = Warranty::with('user')->where('id', $id)->first();
        return view('admin.warranty.view', compact('warranty'));
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
        $userDetails = Warranty::where('id', $id)->delete();

        if ($userDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }
}
