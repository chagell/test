<?php

namespace App\Http\Controllers;

use App\job;
use App\Services\Coordinates;
use FarhanWazir\GoogleMaps\GMaps;
use App\Services\JobServices;
use Illuminate\Http\Request;
use Stevebauman\Location\Location;


class mapController extends Controller
{
    public function showMap(JobServices $jobs, Coordinates $coordinates)
    {
        // Get User Location using IP address
        $userlocation = new Location();
        $currentUserLocation = $userlocation->get();
        $mapInitialLongtiude = $currentUserLocation->longitude;
        $mapInitiallatiude = $currentUserLocation->latitude;
        $allRecruiterJobs =  json_decode($jobs->getAllJobs()->getOriginalContent(),true);

        // Map Initial Coordinates
        $mapObj = new GMaps();
        $config['center'] = $mapInitiallatiude.",".$mapInitialLongtiude;
        $config['zoom'] = '12';
        $config['map_height'] = '100vh';
        $config['width'] = '100vw';
        $config['scrollwheel'] = true;

        // add markers
        foreach($allRecruiterJobs as $job){
            // get coordinates by id
            $id =$job['coordinates_id'];
            $JobPosition = $coordinates->getJobCoordinate($id)->getOriginalContent();
            // parse coordinates into marker postion
            $marker['position']= $JobPosition['latitude'].",".$JobPosition['longitude'];
            $marker['infowindow_content'] = 'This is a new Job come and take the Opportunity'.$job['job_title'];
            $mapObj->add_marker($marker);
        }

        // setup configuration and create map
        $mapObj->initialize($config);
        $map  = $mapObj->create_map();

        return view('Home.map')->with('map',$map);
    }
    public function showGrid()
    {

        // Get User Location using IP address
        $userlocation = new Location();
        $currentUserLocation = $userlocation->get();
        $mapInitialLongtiude = $currentUserLocation->longitude;
        $mapInitiallatiude = $currentUserLocation->latitude;
        $allRecruiterJobs =  json_decode($jobs->getAllJobs()->getOriginalContent(),true);

        // Map Initial Coordinates
        $mapObj = new GMaps();
        $config['center'] = $mapInitiallatiude.",".$mapInitialLongtiude;
        $config['zoom'] = '12';
        $config['map_height'] = '100vh';
        $config['width'] = '100vw';
        $config['scrollwheel'] = true;

        // add markers
        foreach($allRecruiterJobs as $job){
            // get coordinates by id
            $id =$job['coordinates_id'];
            $JobPosition = $coordinates->getJobCoordinate($id)->getOriginalContent();

            // parse coordinates into marker postion
            $marker['position']= $JobPosition['latitude'].",".$JobPosition['longitude'];
            $marker['infowindow_content'] = $job['job_title'];
            $mapObj->add_marker($marker);
        }

        // setup configuration and create map
        $mapObj->initialize($config);
        $map  = $mapObj->create_map();

        return view('Home.map')->with('map',$map);
    }
}
