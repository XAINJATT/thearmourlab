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

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'service_type' => 'required',
            'additional_information' => 'required',
        ]);

        $data = $request->except(["submit", "_token"]);
        $data['user_id'] = auth()->user()->id ?? NULL;
        if (IconRockLearModel::create($data)) {
            return redirect()->back()->with('success-message', 'Your request has been sent successfully');
        }
    }
}
