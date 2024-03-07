<?php

namespace App\Http\Controllers;

use App\Models\IconRockLearModel;
use Illuminate\Http\Request;

class IconRockLearController extends Controller
{
    public function index()
    {
        return view('frontend.pages.icon-rocklear.index');
    }
    public function contact()
    {
        return view('frontend.pages.icon-rocklear.contact');
    }

    public function adminIndex()
    {
        $IconRockLearModel = IconRockLearModel::all();
        return view('admin.iconrocklear.index', compact('IconRockLearModel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            // 'service_type' => 'required',
            'additional_information' => 'required',
        ]);

        $data = $request->except(["submit", "_token"]);
        $data['user_id'] = auth()->user()->id ?? NULL;
        if (IconRockLearModel::create($data)) {
            return redirect()->back()->with('success-message', 'Your request has been sent successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        // Get the existing product details
        $IconRockLearModelDetails = IconRockLearModel::where('id', $id)->delete();

        if ($IconRockLearModelDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }
}
