<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 1)->get();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'email' => 'required|email|max:255|unique:users',
        ]);

        /* 1 - Profile Picture */
        $FileProfile = "";
        if ($request->has('profile_image')) {
            $FileProfile = 'ProfileImage-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('profile_image')->extension();
            $request->file('profile_image')->storeAs('public/users/', $FileProfile);
        }

        DB::beginTransaction();
        $Affected = null;
        $Affected = User::create([
            'email' => $validatedData['email'],
            'name' => $request['name'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'password' => Hash::make($request['password']),
            'role' => '1',
            'profile_image' => $FileProfile,
            'created_at' => carbon::now()
        ]);

        if ($Affected) {
            DB::commit();

            // Mail::to($validatedData['email'])->send(new WelcomeMail());

            return redirect()->route('admin.user')->with('success-message', 'User added successfully');
        } else {
            return redirect()->route('admin.user')->with('error-message', 'An unhandled error occurred');
        }
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request)
    {
        /* 1 - Profile Picture */
        $FileProfile = "";
        if (!empty($request->has('profile_image'))) {
            if ($request['old_profile_image'] != "") {
                $Path = public_path('storage/users') . '/' . $request['old_profile_image'];
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $FileProfile = 'ProfileImage-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('profile_image')->extension();
            $request->file('profile_image')->storeAs('public/users/', $FileProfile);
        } else {
            $FileProfile = $request['old_profile_image'];
        }
        
        DB::beginTransaction();
        $Affected = null;
        $Affected = User::where('id', $request->user_id)->update([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'role' => '1',
            'profile_image' => $FileProfile,
            'created_at' => carbon::now(),
            'updated_at' => carbon::now()
        ]);
        
        DB::commit();
        if ($Affected) {
            return redirect()->route('admin.user')->with('success-message', 'User updated successfully');
        } else {
            return redirect()->route('admin.user')->with('error', 'An unhandled error occurred');
        }
    }

    public function delete($id)
    {
        // Get the existing product details
        $userDetails = User::where('id', $id)->first();

        if (!empty($userDetails)) {
            $temp = explode("/", $userDetails->profile_image);
            $fileName = end($temp);
            $Path = public_path('storage/users/') . $fileName;
            if (file_exists($Path)) {
                unlink($Path);
            }
        }

        $userDetails->delete();

        if ($userDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }

    public function statusUpdate(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            if ($user->status == 1) {
                $user->status = 0;
            }elseif($user->status == 0){
                $user->status = 1;
            }
            $user->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function CheckForDuplicateEmail(Request $request)
    {
        $id = $request['Id'];
        $value = $request['Value'];
        $count = User::where('id', '<>', $id)
            ->where('email', $value)
            ->count();

        if ($count > 0) {
            return 'Failed';
        } else {
            return 'Success';
        }
    }
}
