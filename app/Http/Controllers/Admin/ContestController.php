<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserContests;
use App\Models\Contest;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contests = Contest::orderBy('id', 'DESC')->get();
        return view('admin.contest.index', compact('contests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 1)->where('status', 1)->get();
        return view('admin.contest.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'start_date' => 'required', // Assuming 'id' is a required field
            'end_date' => 'required', // Assuming 'id' is a required field
            'is_active' => 'required',
            'description' => 'required',
        ]);

        // dd($request);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        /* - upload a document ( contest image ) */
        $FileImage = "";
        if ($request->has('contest_image')) {
            $FileImage = 'ContestImage-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('contest_image')->extension();
            $request->file('contest_image')->storeAs('public/contest_image/', $FileImage);
        }

        $data = [
            'title' => $request->input('title'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'is_active' => $request->input('is_active'),
            'description' => $request->input('description'),
            'image' => $FileImage,
        ];

        $contest = Contest::create($data);

        if ($contest) {
            return redirect()->route('admin.contests')->with('success-message', 'Contest created successfully!');
        } else {
            return redirect()->back()->with('error-message', 'Something Went wrong!');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Contest $contest)
    {
        dd('Admin show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contest = Contest::where('id', $id)->first();
        $users = User::where('role', 1)->where('status', 1)->get();
        return view('admin.contest.edit', compact('contest', 'users', 'id'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        if (empty($request->contest_id)) {
            return redirect()->back()->with('error-message', 'Invalid request');
        }
        $contest = Contest::findOrFail($request->contest_id);

        $FileImage = "";
        if (!empty($request->has('image'))) {
            if ($request['old_image'] != "") {
                $temp = explode("/", $request['old_image']);
                $fileName = end($temp);
                $Path = public_path('storage/contest_image/') . $fileName;
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
            $FileImage = 'ContestImage-' . Carbon::now()->format('Ymd-His') . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/contest_image/', $FileImage);
        } else {
            $temp = explode("/", $request['old_image']);
            $fileName = end($temp);
            $FileImage = $fileName;
        }


        DB::beginTransaction();
        // dd((int)$request->is_active , $contest->is_active, (int)$request->is_active != $contest->is_active , $request->is_active == '0');
        if ((int)$request->is_active != $contest->is_active && $request->is_active == '0') {
            $registered_users = UserContests::where('contest_id', $contest->id)->get();
            if (count($registered_users) > 0) {
                foreach ($registered_users  as $key => $registered_user) {
                    $registered_user->update([
                        'status' => 2,
                        'updated_at' => carbon::now()
                    ]);
                }
            }
        }


        $Affected = $contest->update([
            'title' => $request->input('title'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'is_active' => $request->input('is_active'),
            'description' => $request->input('description'),
            'image' => $FileImage,
            'updated_at' => carbon::now()
        ]);
        

        if ($Affected) {
            DB::commit();
            return redirect()->route('admin.contests')->with('success-message', 'Contest updated successfully');
        } else {
            DB::rollBack();
            return redirect()->route('admin.contests')->with('error', 'An unhandled error occurred');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $contestDetails = Contest::where('id', $id)->first();
        
        if (!empty($contestDetails)) {
            $temp = explode("/", $contestDetails->image);
            $fileName = end($temp);
            $Path = public_path('storage/contest_image/') . $fileName;
            if (file_exists($Path)) {
                unlink($Path);
            }
        }

        $contestDetails->delete();

        if ($contestDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => false]);
        }
    }
}
