<?php


namespace App\Services;


use App\jobCoordiantes;

class Coordinates
{
    public function getJobCoordinate($coordinateID){
        $alljobsCoordinates = jobCoordiantes::all()->where('coordinates_id','=',$coordinateID)->first();
        return response()->json($alljobsCoordinates);
    }
}