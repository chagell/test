<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobCoordiantes extends Model
{
    //
    protected $fillable=[
        'address',
        'latitude',
        'longitude'
    ];

    public function jobs(){
        $this->belongsTo('app\job','coordinates_id');
    }
}
