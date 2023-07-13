<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    public function modelid() {
        return $this->belongsto('App\Models\modelid', 'model_id', 'id');
    }
}
