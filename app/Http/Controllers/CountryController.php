<?php

namespace App\Http\Controllers;

use App\city;
use App\country;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class CountryController extends Controller
{
    // get all countries
    public function index(){
        $allCountries = DB::table('world_countries')->pluck('id','name');
        return response()->json($allCountries);
    }

    // get a single country
    public function show($id){
        $singleCountry = DB::table('world_countries')->where('id','=',$id)->pluck('id','name');
        return response()->json($singleCountry);
    }

    // add new country
    public function  create(){
        return "Country added";
    }
}
