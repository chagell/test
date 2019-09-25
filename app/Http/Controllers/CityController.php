<?php

namespace App\Http\Controllers;

use App\city;
use App\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{

    /*
     * Main Methods for resources
     * index->get
     * create->get
     * store->post
     * show->get
     * edit->get
     * update->put/patch
     * destroy->delete*/


    // fetch all cities
    public function index()
    {
        $allCities= DB::table('world_cities')->pluck('id','name');
        return response()->json($allCities);
    }

    // add a new city by admin to an available country
    public function create(){
        return "created";
    }

    //fetch all cities the belong to a country
    public function getCountryCities($id)
    {
        $countryCities = DB::table('world_cities')->where('country_id','=',$id)->pluck('id','name');
        return response()->json($countryCities);
    }
    public function fetch(Request $request)
    {
        //Error handling should be added to ensure city names been returned.
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('world_cities')
            ->where($select, $value)
            ->orderBy('name')
            ->get();
        return response()->json($data);
    }

}
