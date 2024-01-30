<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class PaintProtectionFilmController extends Controller
{
    public function index()
    {
        $ppfFaqs = Faq::where('category', 'ppf')->where('status', 1)->latest("created_at")->get(); 
        return view('frontend.pages.paint_protection_film', compact('ppfFaqs'));
    }

    public function indexSimulator()
    {
        $ppfFaqs = Faq::where('category', 'ppf')->where('status', 1)->latest("created_at")->get(); 
        return view('frontend.pages.paint_protection_film_simulator', compact('ppfFaqs'));
    }
}
