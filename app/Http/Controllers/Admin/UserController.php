<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 1)->get();
        return view('admin.user.index', compact('users'));
    }

    public function delete($id)
    {
        // Get the existing product details
        $userDetails = User::where('id', $id)->delete();

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
}
