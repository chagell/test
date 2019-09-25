<?php


namespace App\Services;


use App\job;
use App\recruiter;
use App\User;

class JobServices
{
    public function getAllJobs()
    {
        $jobs = job::all();
        return response()->json($jobs);
    }
    public function showSingleJob()
    {
        $user_id = $sessionId = session()->get('recruiter_id');
        $user = recruiter::where('recruiter_id',$user_id)->first();

        return view('recruiter.singleJob',compact('user','sessionId'));
    }
}
