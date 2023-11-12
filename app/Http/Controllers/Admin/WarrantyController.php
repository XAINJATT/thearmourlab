<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warranty;
use Illuminate\Http\Request;

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
        return view('admin.warranty.add');
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
        // Handle the uploaded video
        if ($request->hasFile('installer_signature')) {
            $signaturePath = $request->file('installer_signature')->store('signatures', 'public');
        } else {
            $signaturePath = null;
        }

        // Create a new warranty record without validation
        Warranty::create([
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
            'installer_signature' => $signaturePath,
        ]);

        return redirect()->route('admin.warranty')->with('success-message', 'Warranty created Successfully!');
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
        $userDetails = Warranty::where('id', $id)->delete();

        if ($userDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }
}
