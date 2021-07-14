<?php

namespace App;

//use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function age_info()
    {
        return $this->belongsTo('App\Age_info');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function pool()
    {
        return $this->HasMany('App\Pool');
    }
    public function waterslide()
    {
        return $this->HasMany('App\Waterslide');
    }

    public function change_room()
    {
        return $this->belongsToMany('App\Change_room');
    }
    public function food()
    {
        return $this->belongsToMany('App\Food');
    }
    public function facility_photo()
    {
        return $this->HasMany('App\Facility_photo');
    }
}
