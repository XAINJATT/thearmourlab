<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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
    public function liveStatus()
    {
        return view('frontend.pages.live-status');
    }
}
