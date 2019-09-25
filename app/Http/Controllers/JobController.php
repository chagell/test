<?php

namespace App\Http\Controllers;

use App\job;
use App\Services;
use App\jobCoordiantes;
use App\recruiter;
use App\Services\JobServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class JobController extends Controller
{
    /*
     * fetch all jobs for a specific user
     * edit a job
     * create a job
     * update a job
     * */
    public function index(JobServices $jobServices){

        $user_id = $sessionId = session()->get('recruiter_id');
        $user = recruiter::where('recruiter_id',$user_id)->first();
        $sessionId = session()->get('recruiter_id'); //_token
        $Jobdata = recruiter::find($sessionId)->jobs;

        return view('recruiter.jobs',compact('user','Jobdata','sessionId'));
    }
    public function create(){
        $country_list = DB::table('world_countries')->orderBy('name')->get();
        $industries_list = DB::table('job_industries')->get();
        $user_id = $sessionId = session()->get('recruiter_id');
        $user = recruiter::where('recruiter_id',$user_id)->first();

        return view('recruiter.newJob',compact('user','country_list','industries_list','sessionId'));

    }
    /*Show single job*/
    public function showSingleJob()
    {
//        $singleJob = new JobServices();
//        $singleJob->showSingleJob();
        $user_id = $sessionId = session()->get('recruiter_id');
        $user = recruiter::where('recruiter_id',$user_id)->first();

        return view('recruiter.singleJob',compact('user','sessionId'));

    }
    /*Create new job*/
    public function store(Request $request)
    {
        // validate
        /*we need to validate the data here and error handling to managed (: */
        $recruiterId = session()->get('recruiter_id');
        $startDate = strtr($request['start-date'],'/','-');
        $endDate = strtr($request['end-date'],'/','-');
        // create new coordinates for the job
        $coordinates = new jobCoordiantes();
            $coordinates->address = $request['address_address'];
            $coordinates->latitude = $request['address_latitude'];
            $coordinates->longitude = $request['address_latitude'];
        $coordinates->save();
        $inserted_id = $coordinates->getKey();
        // post the job registered cooridnates to the database
        $job = new job();
            $job->job_title = $request['job-title'];
            $job->recruiter_id = $recruiterId;
            $job->job_description = $request['summernoteInput'];
            $job->job_startDate = date('Y-m-d', strtotime($startDate));
            $job->job_expiryDate = date('Y-m-d', strtotime($endDate));
            $job->country_id = $request['countryId'];
            $job->city_id= $request['cityID'];
            $job->function_id = $request['function'];
            $job->coordinates_id = $inserted_id;
        $job->save();

        // get to a view with list of jobs and mentions that the job has been added
        return redirect('recruiter/activeJobs');
    }

    public function show($user_id){
        return null;
    }

    public function edit(){
        return null;
    }
    public function update(){
        return null;
    }
    public function destroy(Request $request){
        $jobID = $request['job_id'];
        return $jobID;
    }
}
