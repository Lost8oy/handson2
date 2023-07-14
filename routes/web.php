<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CountryController;
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
    return view('welcome');
});

route::get('/countries', [CountryController::class, 'read'])->name('country.read');
route::get('/countries/create', [CountryController::class, 'create'])->name('country.create');
route::get('/manufacturers', [ManufactureController::class, 'read'])->name('manufacturer.read');
route::get('/manufacturers', [ManufactureController::class, 'create'])->name('manufacturer.create');


route::get('/computers/{id}', function($id) {
    return view('computer', [
        'computer' => computer::find($id)
    ]);
});