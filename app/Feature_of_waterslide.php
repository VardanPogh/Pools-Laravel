<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature_of_waterslide extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'features_of_waterslides';

    public function waterslide()
    {
        return $this->belongsToMany('App\Waterslide');
    }
}
