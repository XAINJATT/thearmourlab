<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Exception;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Media::latest("created_at")->get();
        return view("admin.media.index", compact("medias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.media.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the request...
            $request->validate([
                'file' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,mp4,mov,ogg,qt|max:20000', // Single file
                'category' => 'string'
            ]);

            $file = $request->file('file');
            $isGallery = $request->input('is_gallery');
            $category = $request->input('category');

            $path = $file->store('public/media'); // Stores in Storage/app/public/media

            // Create a new media instance and save it to the database
            $media = new Media();
            $media->path = $path;
            $media->status = 1;
            $media->type = $file->getClientMimeType();
            $media->is_gallery = $isGallery;
            $media->category = $category;
            $media->save();

            return response()->json(['success' => 'Media uploaded successfully.']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
        }
    }


    public function loadMoreGallery(Request $request)
    {
        $page = $request->page ?? 1;
        $category = $request->category; // Get the current category
        $itemsPerPage = 6;

        $query = get_gallery_media(); // Assuming this returns a query builder instance
        if ($category) {
            $query = $query->where('category', $category);
        }

        $images = $query->skip(($page - 1) * $itemsPerPage)->take($itemsPerPage)->get();
        $hasMore = ($query->count() > $page * $itemsPerPage);

        $html = view('frontend.partials.gallery_items', compact('images'))->render();

        return response()->json([
            'html' => $html,
            'hasMore' => $hasMore
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Get the existing product details
        $media = Media::where('id', $id)->delete();

        if ($media) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function status(Request $request, $id)
    {
        try {
            $media = Media::findOrFail($id);
            if ($media->status == 1) {
                $media->status = 0;
            } elseif ($media->status == 0) {
                $media->status = 1;
            }
            $media->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
