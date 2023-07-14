<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\JoystickController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\ManufacturerController;
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

//country route
route::get('/country', [CountryController::class, 'index'])->name('country.index');
route::get('/country/create', [CountryController::class, 'create'])->name('country.create');
route::post('/country', [CountryController::class, 'store'])->name('country.store');
route::get('/country/{country}/edit', [CountryController::class, 'edit'])->name('country.edit');
route::put('/country/{country}/update', [CountryController::class, 'update'])->name('country.update');
route::delete('/country/{country}/destroy', [CountryController::class, 'destroy'])->name('country.destroy');
//manufacturer route
route::get('/manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');
route::get('/manufacturer/create', [ManufacturerController::class, 'create'])->name('manufacturer.create');
route::post('/manufacturer', [ManufacturerController::class, 'store'])->name('manufacturer.store');
route::get('/manufacturer/{manufacturer}/edit', [ManufacturerController::class, 'edit'])->name('manufacturer.create');
route::put('/manufacturer/{manufacturer}/update', [ManufacturerController::class, 'update'])->name('manufacturer.update');
route::delete('/manufacturer/{manufacturer}/destroy', [ManufacturerController::class, 'destroy'])->name('manufacturer.destroy');
//keyboard route
route::get('/keyboard', [KeyboardController::class, 'index'])->name('keyboard.index');
route::get('/keyboard/create', [KeyboardController::class, 'create'])->name('keyboard.create');
route::post('/keyboard', [KeyboardController::class, 'store'])->name('keyboard.store');
route::get('/keyboard/{keyboard}/edit', [KeyboardController::class, 'edit'])->name('keyboard.create');
route::put('/keyboard/{keyboard}/update', [KeyboardController::class, 'update'])->name('keyboard.update');
route::delete('/keyboard/{keyboard}/destroy', [KeyboardController::class, 'destroy'])->name('keyboard.destroy');
//joystick route
route::get('/joystick', [JoystickController::class, 'index'])->name('joystick.index');
route::get('/joystick/create', [JoystickController::class, 'create'])->name('joystick.create');
route::post('/joystick', [JoystickController::class, 'store'])->name('joystick.store');
route::get('/joystick/{joystick}/edit', [JoystickController::class, 'edit'])->name('joystick.create');
route::put('/joystick/{joystick}/update', [JoystickController::class, 'update'])->name('joystick.update');
route::delete('/joystick/{joystick}/destroy', [JoystickController::class, 'destroy'])->name('joystick.destroy');
//computer controller
route::get('/computer', [ComputerController::class, 'index'])->name('computer.index');
route::get('/computer/create', [ComputerController::class, 'create'])->name('computer.create');
route::post('/computer', [ComputerController::class, 'store'])->name('computer.store');
route::get('/computer/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.create');
route::put('/computer/{computer}/update', [ComputerController::class, 'update'])->name('computer.update');
route::delete('/computer/{computer}/destroy', [ComputerController::class, 'destroy'])->name('computer.destroy');
//monitor route
route::get('/monitor', [MonitorController::class, 'index'])->name('monitor.index');
route::get('/monitor/create', [MonitorController::class, 'create'])->name('monitor.create');
route::post('/monitor', [MonitorController::class, 'store'])->name('monitor.store');
route::get('/monitor/{monitor}/edit', [MonitorController::class, 'edit'])->name('monitor.create');
route::put('/monitor/{monitor}/update', [MonitorController::class, 'update'])->name('monitor.update');
route::delete('/monitor/{monitor}/destroy', [MonitorController::class, 'destroy'])->name('monitor.destroy');
