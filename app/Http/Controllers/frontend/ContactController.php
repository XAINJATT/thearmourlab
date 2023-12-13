<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsInformAdmin;
use App\Mail\ContactUsInformUser;
use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.pages.contact');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $Affected = null;
        $Affected = ContactUs::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'message' => $request['message'],
            'type_of_service' => $request['type_of_service'],
            'created_at' => carbon::now()
        ]);
        
        if ($Affected) {
            DB::commit();

            $adminDetails = User::where('id', 1)->where('role', 0)->first();
            $userDetails = ContactUs::where('id', $Affected->id)->first();

            Mail::to($adminDetails['email'])->send(new ContactUsInformAdmin($userDetails));
            // Mail::to($Affected['email'])->send(new ContactUsInformUser());

            return redirect()->route('frontend.contact')->with('success-message', "Thank you for reaching out to us! Your contact details have been successfully received. We'll be in touch within 24 hours.");
        } else {
            DB::rollBack();
            return redirect()->route('frontend.contact')->with('error', 'An unhandled error occurred');
        }
    }
}
