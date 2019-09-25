<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;
use App\Http\Controllers\mapController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $gmaps;
    public function __construct(GMaps $gmaps)
    {
        $this->gmaps = $gmaps;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');

    }
    public function returnRegistrationType()
    {
        return view('registrationType');
    }
}
