<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{

    protected $fillable = ['crime', 'description'];

    public function detective () 
    {
        return $this->belongsTo('App\Detective');
    }
}
