<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{

    protected $fillable = ['subject', 'description'];

    public function detective () 
    {
        return $this->belongsTo('App\Detective', 'detective_id');
    }
}
