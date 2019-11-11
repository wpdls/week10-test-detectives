<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    public function detective () 
    {
        return $this->belongsTo('App\Detective');
    }
}
