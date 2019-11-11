<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{

    protected $fillable = [''];
    public function detective () 
    {
        return $this->belongsTo('App\Detective');
    }
}
