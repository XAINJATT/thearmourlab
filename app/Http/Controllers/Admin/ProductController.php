<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* - Image */
        $FileImage = "";
        if ($request->has('product_image')) {
            $FileImage = 'ProductImage-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('product_image')->extension();
            $request->file('product_image')->storeAs('public/products/', $FileImage);
        }

        // Create a slug from the category name
        $slug = Str::slug($request['name']);
        
        DB::beginTransaction();
        $Affected = null;
        $Affected = Product::create([
            'name' => $request['name'],
            'slug' => $slug,
            'price' => $request['price'],
            'discounted_price' => $request['discounted_price'],
            'description' => $request['description'],
            'product_image' => $FileImage,
            'status' => 1,
            'soh' => $request['soh'],
            'created_at' => carbon::now()
        ]);

        foreach ($request->other_images as $image) {
            $imageName = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/products/', $imageName);
            ProductImage::create([
                'product_id' => $Affected->id,
                'image' => $imageName
            ]);
        }

        $stock = new Stock();
        $stock->product_id = $Affected->id;
        $stock->qty = $Affected->soh;
        $stock->type = 0;
        $stock->save();
        
        if ($Affected && $stock) {
            DB::commit();

            return redirect()->route('admin.product')->with('success-message', 'Product added successfully');
        } else {
            return redirect()->route('admin.product')->with('error-message', 'An unhandled error occurred');
        }
    }

    public function edit($id)
    {
        $products = Product::with('ProductImages')->where('id', $id)->first();
        return view('admin.product.edit', compact('products'));
    }

    public function update(Request $request)
    {
        /* Profile Picture */
        $FileImage = "";
        if (!empty($request->has('product_image'))) {
            if ($request['old_product_image'] != "") {
                $temp = explode("/", $request['old_product_image']);
                $fileName = end($temp);
                $Path = public_path('storage/products/') . $fileName;
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $FileImage = 'Image-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('product_image')->extension();
            $request->file('product_image')->storeAs('public/products/', $FileImage);
        } else {
            $temp = explode("/", $request['old_product_image']);
            $fileName = end($temp);
            $FileImage = $fileName;
        }

        // Create a slug from the category name
        $slug = Str::slug($request['name']);
        
        DB::beginTransaction();
        $Affected = null;
        $Affected = Product::where('id', $request->product_id)->update([
            'name' => $request['name'],
            'slug' => $slug,
            'price' => $request['price'],
            'discounted_price' => $request['discounted_price'],
            'description' => $request['description'],
            'product_image' => $FileImage,
            'status' => 1,
            'soh' => $request['soh'],
            'created_at' => carbon::now(),
            'updated_at' => carbon::now()
        ]);

        $productsDetails = Product::with('ProductImages')->where('id', $request->product_id)->first();

        // Update other images
        if ($request['other_images']) {
            // Delete existing other images
            foreach ($productsDetails->ProductImages as $image) {
                $temp = explode("/", $image->image);
                $fileName = end($temp);
                $imagePath = public_path('storage/products/') . $fileName;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }
            foreach ($request->other_images as $image) {
                $imageName = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/products/', $imageName);
                ProductImage::create([
                    'product_id' => $productsDetails->id,
                    'image' => $imageName
                ]);
            }
        }

        $stock = Stock::where('product_id', $request->product_id)->delete();

        $stock = new Stock();
        $stock->product_id = $request->product_id;
        $stock->qty = $request->soh;
        $stock->type = 0;
        $stock->save();
        
        if ($Affected && $stock) {
            DB::commit();
            return redirect()->route('admin.product')->with('success-message', 'Product updated successfully');
        } else {
            DB::rollBack();
            return redirect()->route('admin.product')->with('error', 'An unhandled error occurred');
        }
    }

    public function delete($id)
    {
        // Get the existing product details
        $productsDetails = Product::where('id', $id)->first();
        
        if (!empty($productsDetails)) {
            $temp = explode("/", $productsDetails->product_image);
            $fileName = end($temp);
            $Path = public_path('storage/products/') . $fileName;
            if (file_exists($Path)) {
                unlink($Path);
            }
        }

        $stock = Stock::where('product_id', $productsDetails->id)->delete();
        $productsDetails->delete();

        if ($productsDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }

    public function statusUpdate(Request $request, $id)
    {
        try {
            $blog = Product::findOrFail($id);
            if ($blog->status == 1) {
                $blog->status = 0;
            }elseif($blog->status == 0){
                $blog->status = 1;
            }
            $blog->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
