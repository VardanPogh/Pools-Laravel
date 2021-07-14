<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Change_room extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function facility()
    {
        return $this->belongsToMany('App\Facility');
    }
}
