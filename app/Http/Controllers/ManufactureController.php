<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ManufactureController extends Controller
{
    public function read(){
        return view('manufacturer.read');
    }

    public function create(){
        return view('manufacturer.create');
    }

    public function store(Request $request){
        $data = $request-> validate([
        'country_id' => 'required',
        'name' => 'required',
        'link' => 'required',
        'description' => 'required'
        ]);
    }
}
