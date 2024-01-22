<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    public function create()
    {
        // Ensure only admin can upload
        abort_unless(auth()->user()->isAdmin(), 403);

        $users = User::all(); // Get all users
        return view('admin.invoice.upload-invoice', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,id',
            'invoice_files.*' => 'required|file|mimes:pdf',
        ]);

        $user = User::findOrFail($request->email); // Assuming email field actually contains user ID

        foreach ($request->file('invoice_files') as $file) {
            $filePath = $file->store('public/invoices');
            Invoice::create([
                'user_id' => $user->id,
                'file_path' => $filePath,
            ]);
        }

        return redirect()->route('admin.upload-invoice.create')->with('success-message', 'Invoice uploaded successfully');
    }

    public function showCustomerInvoices($id = null)
    {
        if (auth()->user()->isAdmin()) {
            if ($id) {
                $user = User::findOrFail($id);
            }
        } else {
            $user = auth()->user();
        }

        $invoices = $user->invoices;

        return view('admin.invoice.view-invoices', compact('user', 'invoices'));
    }
}
