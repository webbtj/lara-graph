<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }
}
