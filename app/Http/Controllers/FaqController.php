<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Exception;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest("created_at")->get();
        return view("admin.faqs.index", compact("faqs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.faqs.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'question' => 'required',
                'answer' => 'required',
                'category' => 'string|required'
            ]);

            $question = $request->input('question');
            $answer = $request->input('answer');
            $status = $request->input('status');
            $category = $request->input('category');

            // Create a new faq instance and save it to the database
            $faq = new Faq();
            $faq->question = $question;
            $faq->answer = $answer;
            $faq->status = $status ?? 0;
            $faq->category = $category;
            $faq->save();

            return response()->json(['success' => 'Faq uploaded successfully.']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faqs = Faq::where('id', $id)->first();
        return view('admin.faqs.edit', compact('faqs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
                'question' => 'required',
                'answer' => 'required',
                'category' => 'string|required'
            ]);

            $question = $request->input('question');
            $answer = $request->input('answer');
            $status = $request->input('status');
            $category = $request->input('category');

            // Create a new faq instance and save it to the database
            $faq = Faq::where('id', $request->id)->first();
            $faq->question = $question;
            $faq->answer = $answer;
            $faq->status = $status ?? 0;
            $faq->category = $category;
            $faq->save();

            return redirect()->route('admin.faq')->with('success-message', 'Faq update successfully');
        } catch (Exception $e) {
            return redirect()->route('admin.faq')->with('error-message', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Get the existing product details
        $faq = Faq::where('id', $id)->delete();

        if ($faq) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function status(Request $request, $id)
    {
        try {
            $faq = Faq::findOrFail($id);
            if ($faq->status == 1) {
                $faq->status = 0;
            } elseif ($faq->status == 0) {
                $faq->status = 1;
            }
            $faq->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
