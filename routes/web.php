<?php

use Khsing\World\World;
use \FarhanWazir\GoogleMaps\GMaps;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
 * Recruiter
 * job
 * jobCoordinates
 * job Industry
 * job Title
 * Job function
 */
Route::group(['prefix'=>'/'],function(){
    Route::get('/','mapController@showMap');
    Route::get('/gridView','mapController@showGrid');
});

Auth::routes();



//Auth::routes();
/*
|--------------------------------------------------------------------------
| Job function Routes
|--------------------------------------------------------------------------
*/

Route::get('/jobs', function(){
  return view('welcome');
});

Route::group(['prefix'=>'coordinates'],function (){
   Route::get('/{coordinates_id}','CoordinatesController@show');
});
/*
|--------------------------------------------------------------------------
| job industry Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'jobIndustries'],function(){
    Route::get('/','jobIndustryController@index');
});

/*
|--------------------------------------------------------------------------
| Job Functions Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'jobFunctions'],function(){
    Route::get('/','jobFunctionController@index');
    Route::get('/{industry_id}','jobFunctionController@getIndustryFunction');
});

/*
|--------------------------------------------------------------------------
| City Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'city'],function(){
    Route::get('/cities', 'CityController@index');
    Route::get('/cities/{country_id}', 'CityController@getCountryCities');
});

/*
|--------------------------------------------------------------------------
| Country Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'country'],function(){

    Route::get('/countries','CountryController@index');
    Route::get('/add_country','CountryController@create');
});

/*
|--------------------------------------------------------------------------
| Recruiter Routes
|--------------------------------------------------------------------------
*/
    Route::group(['prefix'=>'recruiter'],function(){
        Route::get('/recruiter','recruiterController@index');
        //To reach recruiter landing page
        Route::get('/','recruiterController@index');
        // to reach recruiter list of active jobs
        Route::get('/activeJobs','JobController@index');
        // create a new job
        Route::get('/newjob','JobController@create');
        // store a new job
        Route::POST('/storeNewJob','JobController@store');
        // Delete a job
        Route::GET('/deleteJob/{job_id}','JobController@destroy');
        // show single job
        Route::GET('/singleJob','JobController@showSingleJob');
        //To reach recruiter registration view
        Route::get('/recRegistration', 'recruiterController@create');
        //This is for storing user details into database
        Route::POST('/registerRecruiter', 'recruiterController@store');
        //This is to login the user to their profile
        Route::get('/recruiterProfile','recruiterController@index');
        //This is to update recruiter profile.
        Route::post('/recruiterUpdate','recruiterController@update');
    });
