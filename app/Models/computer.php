<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    use HasFactory;
    protected $fillable = [
        'manufacturer_id',
        'inventory_number',
        'model',
        'submodel',
        'processor',
        'power',
        'speed',
        'country',
        'date',
        'bit',
        'description',
    ];

    public function manufacturer() {
        return $this->belongsto('App\Models\manufacturer', 'manufacturer_id', 'id');
    }
    public function modelid() {
        return $this->hasMany('App\Models\modelid');
    }
}
