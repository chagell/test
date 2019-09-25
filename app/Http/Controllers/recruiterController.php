<?php

namespace App\Http\Controllers;

use App\city;
use App\country;
use App\recruiter;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Khsing\World\World;
use Khsing\World\Models\Continent;
use Illuminate\Support\Facades\DB;
use function Psy\debug;
use Symfony\Component\Console\Helper\Table;



class recruiterController extends Controller
{
    public function __construct()
    {
//         $this->middleware('auth');
    }
    public function landing(){
        $this->middleware('auth');
        return view('recruiter.index');
    }
    //Recruiter profile
    public function index()
    {
//        $this->middleware('auth');
        $userId = Auth::user();
        $emailId = $userId->email;
        $user = recruiter::where('email',$emailId)->first();
        //reading country and city name
        $countryName = \Khsing\World\Models\Country::find($user->countryId);
        $cityName = \Khsing\World\Models\City::find($user->cityID);
        //Assigning recruiter id to session
        $recruiterIdToSession = session()->put(['recruiter_id'=>$user->recruiter_id]);
        $sessionId = session()->get('recruiter_id'); //_token

        //get country name for recruiter profile
        $getCountryName = DB::table('world_countries')->orderBy('name')->get();
        return view('recruiter.recruiterProfile',compact('user','getCountryName','countryName','cityName','sessionId'));
      //  return view('recruiter.index');

    }

    //Return recruiter registration form and country list
    public function create()
    {
        //Error handling should be added for fetching country list
        $getCountryName = DB::table('world_countries')->orderBy('name')->get();
        return view('recruiter.recruiterRegistration',compact('getCountryName'));
    }

    //    fetching city names
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

    //    storing recruiter registration details into database
    public function store(Request $request)
    {

        //Error handling should be added here to ensure login and profile been inserted to database.
        //Image validation
        request()->validate([
        'companyLogo'=>'file|image|max:1024',
        ]);
        $image = request('companyLogo')->store('uploads','public');
        $user = User::create([
            'email'=>$request['email'],
            'userType_id'=>$request['userType_id'],
            'password'=>Hash::make($request['password']),
        ]);
//        return $user;
        recruiter::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'companyName'=>$request['companyName'],
            'website'=>$request['website'],
            'countryId'=>$request['countryId'],
            'cityID'=>$request['cityID'],
            'companyLogo'=>$image, //$request['companyLogo']->store('uploads','public'),
        ]);

        return redirect('login');
    }

    //Returning username details in recruiter profile dashboard
    public function update(Request $request)
    {
        //Image validation
        request()->validate([
            'companyLogo'=>'file|image|max:1024',
        ]);
        $recruiterId = $request->get('recId');
        $recruiterProfile = recruiter::find($recruiterId);
        $image = request('companyLogo')->store('uploads','public');
        $recruiterProfile->name = $request->get('name');
        $recruiterProfile->companyLogo = $image;
        $recruiterProfile->countryId = $request->get('countryId');
        $recruiterProfile->cityID = $request->get('cityID');
        $recruiterProfile->save();
        return redirect('recruiter/recruiterProfile');
    }
}
