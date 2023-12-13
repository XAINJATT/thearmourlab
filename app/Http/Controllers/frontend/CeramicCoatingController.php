<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class CeramicCoatingController extends Controller
{
    public function index()
    {
        return view('frontend.pages.ceramic-coating');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function financing()
    {
        return view('frontend.pages.financing');
    }
    public function liveStatus()
    {
        
        return view('frontend.pages.live-status');
    }

    public function about()
    {
        $blogDetails = blog::where('status', 1)->get();
        return view('frontend.pages.about', compact('blogDetails'));
    }
}
