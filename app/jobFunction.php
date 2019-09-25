<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobFunction extends Model
{
    //
    public $fillable =[
        'functin_Name',
        'industry_Id'
    ];

    public function jobIndustry(){
        return $this->belongsTo($this->jobIndustry());
    }
}
