<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        if (request("search")) {
            $blogDetails = Blog::where('status', 1)->where("title", "like", "%" . request("search") . "%")->orWhere("description", "like", "%" . request("search") . "%")->orderBy("id", "DESC")->paginate(6)->withQueryString();; // Adjust the number of blogs per page

        } else {
            $blogDetails = Blog::where('status', 1)->orderBy("id", "DESC")->paginate(6)->withQueryString();; // Adjust the number of blogs per page

        }
        return view('frontend.pages.blog', compact('blogDetails'));
    }
}
