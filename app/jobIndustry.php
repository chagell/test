<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobIndustry extends Model
{
    //
    public $fillable =[
        'industry_Name',
    ];
    public function jobFunctions(){
        return $this->hasMany($this->jobFunctions());
    }
}
