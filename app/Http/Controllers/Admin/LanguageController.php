<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langs=Language::all();
        return view('admin.translations.index',compact('langs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        // Include the language file and directly assign it to $translations
        $translations = include(lang_path($id. '/messages' .'.php'));
        
        // Pass the translations array and the language ID to the view
        return view('admin.translations.edit', compact('translations', 'id'));
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Encode the translations array back to JSON format
        $translations = var_export($request->trans, true);
        
        // Write the updated translations back to the language file
        file_put_contents(lang_path($id. '/messages' .'.php'), '<?php return ' . $translations . ';');

        return redirect()->route('admin.language')->with('success-message', 'Translation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
