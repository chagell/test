<?php

namespace App\Http\Controllers;

use App\job;
use App\jobCoordiantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoordinatesController extends Controller
{
    /*
     * fetch all coordinates
     * add new coordinate for a specific job
    * update Coordinate for the job*/
    public function index(){
        $alljobsCoordinates = jobCoordiantes::all();
        return response()->json($alljobsCoordinates);
    }
    public function create(){
        return null;
    }
    public function store(Request $request)
    {
        return null;
    }
    public function show($coordinateID){
        $alljobsCoordinates = jobCoordiantes::all()->where('coordinates_id','=',$coordinateID)->first();
        return response()->json($alljobsCoordinates);
    }
    public function edit(){
        return null;
    }
    public function update(){
        return null;
    }
    public function destroy(){
        return null;
    }
}
