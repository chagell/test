<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jobIndustryController extends Controller
{
    public function index()
    {
        /*$allIndustries = DB::table('job_industries')->pluck('industry_id','industry_name');
        return response()->json($allIndustries);*/
        $allIndustries = DB::table('job_industries')->pluck('industry_id','industry_name');
        return response()->json($allIndustries);
    }

    public function create(){
        return "created";
    }
}
