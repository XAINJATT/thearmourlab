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
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


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
        // Validate the input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discounted_price' => 'numeric|nullable',
            'description' => 'required|string',
            'soh' => 'numeric|nullable',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'other_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            // Add other validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();
        try {
            $FileImage = "";

            if ($request->hasFile('product_image')) {
                $FileImage = 'ProductImage-' . Carbon::now()->format('Ymd-His') . 'latest.' . $request->file('product_image')->extension();
                $request->file('product_image')->storeAs('public/products/', $FileImage);
            }

            // Create a slug from the category name
            $slug = Str::slug($request['name']);

            $product = Product::create([
                'name' => $request['name'],
                'slug' => $slug,
                'price' => $request['price'],
                'discounted_price' => $request['discounted_price'],
                'description' => $request['description'],
                'product_image' => $FileImage,
                'status' => 1,
                'soh' => $request['soh'],
            ]);

            if ($request->hasFile('other_images')) {
                foreach ($request->file('other_images') as $image) {
                    $imageName = time() . rand(10, 999) . '.' . $image->extension();
                    $image->storeAs('public/products/', $imageName);
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => $imageName
                    ]);
                }
            }

            $stock = new Stock();
            $stock->product_id = $product->id;
            $stock->qty = $request->input('soh', 0); // default to 0 if not provided
            $stock->type = 0;
            $stock->save();

            DB::commit();
            return redirect()->route('admin.product')->with('success-message', 'Product added successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            report($e); // Log the exception
            return redirect()->route('admin.product')->with('error-message', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $products = Product::with('ProductImages')->where('id', $id)->first();
        return view('admin.product.edit', compact('products'));
    }

    public function update(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'other_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();
        try {


            // Create a slug from the category name
            $slug = Str::slug($request['name']);

            $product = Product::where('id', $request->product_id)->first();
            if (!$product) {
                throw new \Exception('Product not found.');
            }

            $FileImage = $request['old_product_image'] ?? '';
            if ($request->hasFile('product_image')) {
                // Check if old image exists and delete it
                if (!empty($FileImage)) {
                    Storage::delete('public/products/' . basename($FileImage));
                }

                $FileImage = 'Image-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('product_image')->extension();
                $request->file('product_image')->storeAs('public/products/', $FileImage);
            } else {
                $FileImage = $request['old_product_image'] ?? '';
            }

            $product->update([
                'name' => $request['name'],
                'slug' => $slug,
                'price' => $request['price'],
                'discounted_price' => $request['discounted_price'],
                'description' => $request['description'],
                'product_image' => $FileImage,
                'status' => 1,
                'soh' => $request['soh'],
            ]);

            // Update other images
            if ($request->hasFile('other_images')) {
                foreach ($product->ProductImages as $image) {
                    Storage::delete('public/products/' . basename($image->image));
                    $image->delete();
                }

                foreach ($request->file('other_images') as $image) {
                    $imageName = time() . rand(10, 999) . '.' . $image->extension();
                    $image->storeAs('public/products/', $imageName);
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => $imageName
                    ]);
                }
            }
            
            // Handle stock
            Stock::where('product_id', $request->product_id)->delete();

            $stock = new Stock();
            $stock->product_id = $request->product_id;
            $stock->qty = $request->soh;
            $stock->type = 0;
            $stock->save();
            // dd($product->product_image);

            DB::commit();
            return redirect()->route('admin.product')->with('success-message', 'Product updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.product')->with('error', 'An error occurred: ' . $e->getMessage());
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
            } elseif ($blog->status == 0) {
                $blog->status = 1;
            }
            $blog->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
