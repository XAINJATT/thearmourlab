<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contest;
use App\Models\UserContests;
use App\Http\Requests\StoreContestRequest;
use App\Http\Requests\UpdateContestRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;


class ContestController extends Controller
{

   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contests = Contest::with('registeredUser')->orderBy('id', 'DESC')->get();
        return view('user.contest.index', compact('contests'));
    }
    
    
    public function addUserToContest(Request $request)
    {
        $data = [
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'prize' => $request->prize,
            'contest_id' => $request->contest_id,
        ];

        $contest = UserContests::create($data);


        if ($contest) {
            return response()->json(['success' => true, 'message' => 'User added to contest successfully', 'contest' => $contest]);
        }else{
            return response()->json(['success' => false, 'message' => 'Something Went Wrong!']);
        }

    }
    
    
    public function registerUserToContest(string $id)
    {
        // $contest = Contest::where('id', $id)->first();
        // $user = User::where('id', auth()->user()->id)->first();

        $data = [
            'contest_id' => $id,
            'user_id' => auth()->user()->id,
            'status' => 0,
        ];

        $contest = UserContests::create($data);


        if ($contest) {
            return redirect()->back()->with('success-message', 'You are registered successfully!');
        } else {
            return redirect()->back()->with('error-message', 'Something Went wrong!');
        }

    }
  
    public function liveContest()
    {
        $give_away_status = Setting::where('name','wheel')->first();
        if ($give_away_status) {   
            if ($give_away_status->value == 1) {
                $contests = [];
                $contests = Contest::where('is_active', 1)->orderBy('id', 'DESC')->get();
                $no_of_contests = count($contests);
                return view('frontend.pages.contest.live_contest', compact(['contests', 'no_of_contests']));
            }
        }
        return abort('404');


    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('User create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContestRequest $request)
    {
        dd('User store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contest $contest)
    {
        dd('User show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contest $contest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContestRequest $request, Contest $contest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contest $contest)
    {
        //
    }

}
