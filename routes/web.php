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

//country route
route::get('/countries', [CountryController::class, 'index'])->name('country.index');
route::get('/countries/create', [CountryController::class, 'create'])->name('country.create');
route::post('/countries', [CountryController::class, 'store'])->name('country.store');
route::get('/countries/{country}/edit', [CountryController::class, 'edit'])->name('country.edit');
route::put('/countries/{country}/update', [CountryController::class, 'update'])->name('country.update');
route::delete('/countries/{country}/destroy', [CountryController::class, 'destroy'])->name('country.destroy');
//manufacturer route
route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturer.index');
route::get('/manufacturers/create', [ManufacturerController::class, 'create'])->name('manufacturer.create');
route::post('/manufacturers', [ManufacturerController::class, 'store'])->name('manufacturer.store');
route::get('/manufacturers/{manufacturer}/edit', [ManufacturerController::class, 'edit'])->name('manufacturer.create');
route::put('/manufacturers/{manufacturer}/update', [ManufacturerController::class, 'update'])->name('manufacturer.update');
route::delete('/manufacturers/{manufacturer}/destroy', [ManufacturerController::class, 'destroy'])->name('manufacturer.destroy');
//keyboard route
route::get('/keyboards', [KeyboardController::class, 'index'])->name('keyboard.index');
route::get('/keyboards/create', [KeyboardController::class, 'create'])->name('keyboard.create');
route::post('/keyboards', [KeyboardController::class, 'store'])->name('keyboard.store');
route::get('/keyboards/{keyboard}/edit', [KeyboardController::class, 'edit'])->name('keyboard.create');
route::put('/keyboards/{keyboard}/update', [KeyboardController::class, 'update'])->name('keyboard.update');
route::delete('/keyboards/{keyboard}/destroy', [KeyboardController::class, 'destroy'])->name('keyboard.destroy');
//joystick route
route::get('/joysticks', [JoystickController::class, 'index'])->name('joystick.index');
route::get('/joysticks/create', [JoystickController::class, 'create'])->name('joystick.create');
route::post('/joysticks', [JoystickController::class, 'store'])->name('joystick.store');
route::get('/joysticks/{joystick}/edit', [JoystickController::class, 'edit'])->name('joystick.create');
route::put('/joysticks/{joystick}/update', [JoystickController::class, 'update'])->name('joystick.update');
route::delete('/joysticks/{joystick}/destroy', [JoystickController::class, 'destroy'])->name('joystick.destroy');
//computer controller
route::get('/computers', [ComputerController::class, 'index'])->name('computer.index');
route::get('/computers/create', [ComputerController::class, 'create'])->name('computer.create');
route::post('/computers', [ComputerController::class, 'store'])->name('computer.store');
route::get('/computers/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.create');
route::put('/computers/{computer}/update', [ComputerController::class, 'update'])->name('computer.update');
route::delete('/computers/{computer}/destroy', [ComputerController::class, 'destroy'])->name('computer.destroy');
//monitor route
route::get('/monitors', [MonitorController::class, 'index'])->name('monitor.index');
route::get('/monitors/create', [MonitorController::class, 'create'])->name('monitor.create');
route::post('/monitors', [MonitorController::class, 'store'])->name('monitor.store');
route::get('/monitors/{monitor}/edit', [MonitorController::class, 'edit'])->name('monitor.create');
route::put('/monitors/{monitor}/update', [MonitorController::class, 'update'])->name('monitor.update');
route::delete('/monitors/{monitor}/destroy', [MonitorController::class, 'destroy'])->name('monitor.destroy');
