<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->paginate(12);
        return view('frontend.pages.shop', compact('products'));
    }

    public function productDetails($slug)
    {
        $productDetails = Product::where('status', 1)->where('slug', $slug)->first();
        return view('frontend.pages.product-details', compact('productDetails'));
    }
    
}
