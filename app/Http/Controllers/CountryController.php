<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function create () {
        return view('country.create');
    }
    public function read () {
        return view('country.read');
    }
}
