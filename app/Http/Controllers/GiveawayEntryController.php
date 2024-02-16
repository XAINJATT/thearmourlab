<?php

namespace App\Http\Controllers;

use App\Models\GiveawayEntry;
use Illuminate\Http\Request;

class GiveawayEntryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:giveaway_entries,name',
            'phone' => 'required|max:255|unique:giveaway_entries,phone',
            'email' => 'required|email|max:255|unique:giveaway_entries,email'
        ]);

        GiveawayEntry::create($request->all());
        return back()->with('success', 'Thanks for entering the giveaway!');
    }
    public function storeWinner(Request $request)
    {
        $lastWeek = now()->subWeek();

        $names = GiveawayEntry::where('created_at', '>=', $lastWeek)
            ->where("name", $request->winner)
            ->orderBy('id', 'DESC')
            ->first();

        $names->prize = 1;
        $names->save();

        return response()->json('success');
    }
    public function winners()
    {
        $lastWeek = now()->subWeek();

        $names = GiveawayEntry::where("prize", 1)
            ->orderBy('id', 'DESC')
            ->get();
        return view("admin.giveaway.winners", compact("names"));
    }

    public function listUser()
    {
        $names = GiveawayEntry::all();
        return view("admin.giveaway.users", compact("names"));
    }

     /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        // Get the existing product details
        $GiveawayEntryDetails = GiveawayEntry::where('id', $id)->delete();

        if ($GiveawayEntryDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }
}
