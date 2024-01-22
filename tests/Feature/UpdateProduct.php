<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class UpdateProduct extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    function update_product(Request $request)
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

    function delete_old_images($product_id)
    {
        // Get the existing product details
        $productsDetails = Product::with('ProductImages')->where('id', $product_id)->first();

        if (!empty($productsDetails)) {
            // Delete the existing product image
            $temp = explode("/", $productsDetails->product_image);
            $fileName = end($temp);
            $Path = public_path('storage/products/') . $fileName;
            if (file_exists($Path)) {
                unlink($Path);
            }

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
        }
    }
}