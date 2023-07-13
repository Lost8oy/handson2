<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelid extends Model {
    use HasFactory;

    public function computer() {
        return $this->belongsTo('App\Models\computer', 'model_id', 'id');
    }
    public function keyboard() {
        return $this->belongsTo('App\Models\keyboard', 'model_id', 'id');
    }
    public function joystick() {
        return $this->belongsTo('App\Models\joystick', 'model_id', 'id');
    }
    public function monitor() {
        return $this->belongsTo('App\Models\monitor', 'model_id', 'id');
    }
    public function image() {
        return $this->hasMany('App\Models\image');
    }
    
}
