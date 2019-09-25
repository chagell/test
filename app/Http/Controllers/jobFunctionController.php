<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jobFunctionController extends Controller
{
    // get all functions
    public function index()
    {
        $allIndustries = DB::table('job_functions')->pluck('id','functin_Name');
        return response()->json($allIndustries);
    }

    // fetch related job functions
    public function getIndustryFunction($industry_id)
    {
        $industryFunctions = DB::table('job_functions')->where('industry_id','=',$industry_id)->pluck('id','functin_Name');
        return response()->json($industryFunctions);
    }

    // to add new job function
    public function create(){
        return "created";
    }

    // to store new job function by job Industry
    public function store(Request $request){
        return "Stored";
    }

}
