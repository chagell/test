<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class recruiter extends Model
{
    ///*
    /// register new recuriter
    /// eidt +_update
    ///  deactivate == archive *////
    protected $primaryKey = 'recruiter_id';
    protected $fillable =[
                'companyName',
                'website',
                'companyLogo',
                'email',
                'name',
                'countryId',
                'cityID',
                'longitude',
                'latitude'
    ];

    public function jobs()
    {
        return $this->hasMany('App\job','recruiter_id');
    }

}
