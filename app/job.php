<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'job_id';
    protected $fillable =[
        'recruiter_id',
        'job_title',
        'job_description',
        'job_startDate',
        'job_expiryDate',
        'country_id',
        'city_id',
        'function_id',
        'coordinates_id'
    ];

    public function coordinates()
    {
        $this->hasOne('App\jobCoordiantes','coordinates_id');
    }

    public function recruiter()
    {
        return $this->belongsTo('App\recruiter','recruiter_id');
    }

}
