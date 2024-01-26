<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\Faq;
use Illuminate\Http\Request;

class CeramicCoatingController extends Controller
{
    public function index()
    {
        return view('frontend.pages.ceramic-coating');
    }
    public function faq()
    {
        $ppfFaqs = Faq::where('category', 'ppf')->where('status', 1)->latest("created_at")->get(); 
        $ccFaqs = Faq::where('category', 'cc')->where('status', 1)->latest("created_at")->get(); 
        $wtFaqs = Faq::where('category', 'wt')->where('status', 1)->latest("created_at")->get(); 
        return view('frontend.pages.faq', compact('ppfFaqs', 'ccFaqs', 'wtFaqs'));
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
