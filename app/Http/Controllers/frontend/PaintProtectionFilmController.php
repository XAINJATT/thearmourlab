<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaintProtectionFilmController extends Controller
{
    public function index()
    {
        return view('frontend.pages.paint_protection_film');
    }

    public function indexSimulator()
    {
        return view('frontend.pages.paint_protection_film_simulator');
    }
}
