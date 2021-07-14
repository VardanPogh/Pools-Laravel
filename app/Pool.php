<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function facility()
    {
        return $this->belongsTo('App\Facility');
    }
    public function diving()
    {
        return $this->belongsToMany('App\Diving');
    }
    public function feature()
    {
        return $this->belongsToMany('App\Feature');
    }
    public function waterslide()
    {
        return $this->belongsToMany('App\Waterslide')->withPivot('count');
    }
}
