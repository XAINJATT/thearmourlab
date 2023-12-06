<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WindowTintSimulatorController extends Controller
{
    public function index()
    {
        return view('frontend.pages.window_tint');
    }

    public function indexSimulator()
    {
        return view('frontend.pages.window_tint_simulator');
    }
}
