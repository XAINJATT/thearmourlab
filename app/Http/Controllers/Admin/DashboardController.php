<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $page = 'dashboard';
        
        return view('admin.index', compact('page'));
    }

    function profile()
    {
        $page = 'profile';
        $users = User::where('id', Auth::user()->id)->where('role', 0)->first(); // Fetch the user from the database
        return view('admin.profile', compact('page', 'users'));
    }  
    
    public function update(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email,' . $request->user()->id,
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.profile')->with('error-message', 'Email Address already exist');
        }

        /* 1 - Profile Picture */
        $FileProfile = "";
        if (!empty($request->has('profile_image'))) {
            if ($request['old_profile_image'] != "") {
                $temp = explode("/", $request['old_profile_image']);
                $fileName = end($temp);
                $Path = public_path('storage/users/') . $fileName;
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $FileProfile = 'ProfileImage-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('profile_image')->extension();
            $request->file('profile_image')->storeAs('public/users/', $FileProfile);
        } else {
            $temp = explode("/", $request['old_profile_image']);
            $fileName = end($temp);
            $FileProfile = $fileName;
        }
        
        DB::beginTransaction();
        $Affected = null;
        $Affected = User::where('id', $request->user_id)->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'profile_image' => $FileProfile,
            'password' => Hash::make($request['password']),
            'created_at' => carbon::now(),
            'updated_at' => carbon::now()
        ]);
        
        DB::commit();
        if ($Affected) {
            return redirect()->route('admin.profile')->with('success-message', 'Profile updated successfully');
        } else {
            return redirect()->route('admin.profile')->with('error-message', 'An unhandled error occurred');
        }
    }

}
