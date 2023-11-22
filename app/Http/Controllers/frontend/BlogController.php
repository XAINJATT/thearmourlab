<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogDetails = Blog::where('status', 1)->paginate(6); // Adjust the number of blogs per page
        return view('frontend.pages.blog', compact('blogDetails'));
    }
}
