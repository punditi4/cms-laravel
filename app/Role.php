<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    public function users(){
        return $this->belongsToMany('App\User');
    }

    //teste

//4
//5

//3
}

