<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index () {
        return view('computer.computers');
    }
    public function create () {
        return view('computer.create');
    }
}
