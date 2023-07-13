<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joystick extends Model
{
    use HasFactory;

    
    
    public function manufacturer() {
        return $this->belongsto('App\Models\manufacturer', 'manufacturer_id', 'id');
    }
    public function modelid() {
        return $this->hasMany('App\Models\modelid');
    }
}
