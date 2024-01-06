<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'profile_picture' => 'image|nullable',
            'message' => 'required|string',
        ]);

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        Testimonial::create($data);

        return back()->with('success', 'Testimonial created successfully.');
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }
    public function destroy(Testimonial $testimonial)
    {

        if ($testimonial->profile_picture) {
            Storage::delete($testimonial->profile_picture);
        }
        $testimonial->delete();
        return response()->json(['success' => true, 'message' => 'Testimonial deleted successfully.']);
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'profile_picture' => 'image|nullable',
            'message' => 'required|string',
        ]);

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $testimonial->update($data);

        return back()->with('success', 'Testimonial updated successfully.');
    }
}
