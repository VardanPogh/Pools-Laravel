<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waterslide extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function facility()
    {
        return $this->belongsTo('App\Facility');
    }
    public function feature_of_waterslide()
    {
        return $this->belongsToMany('App\Feature_of_waterslide','feature_of_waterslide_waterslide','feature_id','waterslide_id');
    }
}
