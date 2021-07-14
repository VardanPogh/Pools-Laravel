<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function facility()
    {
        return $this->belongsTo('App\Facility');
    }
}
