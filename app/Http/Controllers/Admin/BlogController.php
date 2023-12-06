<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* - Image */
        $FileImage = "";
        if ($request->has('image')) {
            $FileImage = 'Image-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/blogs/', $FileImage);
        }
        
        /* - Blog Writer Profile Picture */
        $FileProfile = "";
        if ($request->has('blog_writer_picture')) {
            $FileProfile = 'BlogWriterImage-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('blog_writer_picture')->extension();
            $request->file('blog_writer_picture')->storeAs('public/blogs/', $FileProfile);
        }
        
        DB::beginTransaction();
        $Affected = null;
        $Affected = Blog::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $FileImage,
            'blog_writer_name' => $request['blog_writer_name'],
            'blog_writer_picture' => $FileProfile,
            'created_at' => carbon::now()
        ]);
        
        if ($Affected) {
            DB::commit();

            return redirect()->route('admin.blog')->with('success-message', 'Blog added successfully');
        } else {
            return redirect()->route('admin.blog')->with('error-message', 'An unhandled error occurred');
        }
    }

    public function edit($id)
    {
        $blogs = Blog::where('id', $id)->first();
        return view('admin.blog.edit', compact('blogs'));
    }

    public function update(Request $request)
    {
        /* Profile Picture */
        $FileImage = "";
        if (!empty($request->has('image'))) {
            if ($request['old_image'] != "") {
                $temp = explode("/", $request['old_image']);
                $fileName = end($temp);
                $Path = public_path('storage/blogs/') . $fileName;
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $FileImage = 'Image-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/blogs/', $FileImage);
        } else {
            $temp = explode("/", $request['old_image']);
            $fileName = end($temp);
            $FileImage = $fileName;
        }
        
        /* Profile Picture */
        $FileProfile = "";
        if (!empty($request->has('blog_writer_picture'))) {
            if ($request['old_blog_writer_picture'] != "") {
                $temp = explode("/", $request['old_blog_writer_picture']);
                $fileName = end($temp);
                $Path = public_path('storage/blogs/') . $fileName;
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $FileProfile = 'BlogWriterImage-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('blog_writer_picture')->extension();
            $request->file('blog_writer_picture')->storeAs('public/blogs/', $FileProfile);
        } else {
            $temp = explode("/", $request['old_blog_writer_picture']);
            $fileName = end($temp);
            $FileProfile = $fileName;
        }
        
        DB::beginTransaction();
        $Affected = null;
        $Affected = Blog::where('id', $request->blog_id)->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $FileImage,
            'blog_writer_name' => $request['blog_writer_name'],
            'blog_writer_picture' => $FileProfile,
            'created_at' => carbon::now(),
            'updated_at' => carbon::now()
        ]);
        
        if ($Affected) {
            DB::commit();
            return redirect()->route('admin.blog')->with('success-message', 'Blog updated successfully');
        } else {
            DB::rollBack();
            return redirect()->route('admin.blog')->with('error', 'An unhandled error occurred');
        }
    }

    public function delete($id)
    {
        // Get the existing product details
        $blogsDetails = Blog::where('id', $id)->first();
        
        if (!empty($blogsDetails)) {
            $temp = explode("/", $blogsDetails->image);
            $fileName = end($temp);
            $Path = public_path('storage/blogs/') . $fileName;
            if (file_exists($Path)) {
                unlink($Path);
            }
        }

        if (!empty($blogsDetails)) {
            $temp = explode("/", $blogsDetails->blog_writer_picture);
            $fileName = end($temp);
            $Path = public_path('storage/blogs/') . $fileName;
            if (file_exists($Path)) {
                unlink($Path);
            }
        }
        $blogsDetails->delete();

        if ($blogsDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }

    public function statusUpdate(Request $request, $id)
    {
        try {
            $blog = Blog::findOrFail($id);
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
