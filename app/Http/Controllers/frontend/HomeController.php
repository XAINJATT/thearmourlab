<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogDetails = blog::where('status', 1)->get();
        return view('frontend.pages.welcome', compact('blogDetails'));
    }
}
