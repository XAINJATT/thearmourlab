<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\StreamedResponse;

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
        $user = User::where('id', Auth::user()->id)->first(); // Fetch the user from the database
        return view('admin.profile', compact('page', 'user'));
    }    

}
