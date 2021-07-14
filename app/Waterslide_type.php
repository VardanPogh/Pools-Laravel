<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waterslide_type extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function pool()
    {
        return $this->belongsToMany('App\Pool')->withPivot('count');
    }
}
