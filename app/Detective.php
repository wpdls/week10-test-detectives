<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detective extends Model
{
    public function images () 
    {
        return $this->hasMany('App\Image', 'detective_image');
    }
}
