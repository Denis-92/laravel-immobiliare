<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    public function houses(){
        return $this->belongsToMany('App\model\House');
    }

}
