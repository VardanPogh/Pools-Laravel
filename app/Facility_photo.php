<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility_photo extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function facility()
    {
        return $this->belongsTo('App\Facility');
    }
}
