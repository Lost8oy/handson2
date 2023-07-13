<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    use HasFactory;

    public function country() {
        return $this->belongsTo('App\Models\country','country_id','id');
    }
    public function computer() {
        return $this->hasMany('App\Models\computer');
    }
    public function keyboard() {
        return $this->hasMany('App\Models\keyboard');
    }
    public function joystick() {
        return $this->hasMany('App\Models\joystick');
    }
    public function monitor() {
        return $this->hasMany('App\Models\monitor');
    }
}