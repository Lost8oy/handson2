<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'inventory_number',
        'model',
        'color',
        'manufacturer_id',
        'size',
        'description'
    ];
    public function manufacturer() {
        return $this->belongsto('App\Models\manufacturer', 'manufacturer_id', 'id');
    }
    public function modelid() {
        return $this->hasMany('App\Models\modelid');
    }
}
