<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diving extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function pool()
    {
        return $this->belongsToMany('App\Pool');
    }
}
