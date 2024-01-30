<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class WindowTintSimulatorController extends Controller
{
    public function index()
    {
        $wtFaqs = Faq::where('category', 'wt')->where('status', 1)->latest("created_at")->get(); 
        return view('frontend.pages.window_tint');
    }

    public function indexSimulator()
    {
        $wtFaqs = Faq::where('category', 'wt')->where('status', 1)->latest("created_at")->get(); 
        return view('frontend.pages.window_tint_simulator', compact('wtFaqs'));
    }
}
