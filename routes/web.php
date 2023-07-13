<?php

use Illuminate\Support\Facades\Route;
use App\Models\computer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', function() {
    return view('computers', [
        'computers' => computer::all()
    ]);
});

route::get('/computers/{id}', function($id) {
    return view('computer', [
        'computer' => computer::find($id)
    ]);
});