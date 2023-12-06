<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function index($id)
    {
        $blogDetails = blog::where('status', 1)->where('id', $id)->first();
        // Retrieve recent blogs (excluding the current one)
        $recentBlogs = Blog::where('status', 1)
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('frontend.pages.blog-details', compact('blogDetails', 'recentBlogs'));
    }
}
