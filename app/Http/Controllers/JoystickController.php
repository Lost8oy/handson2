<?php

namespace App\Http\Controllers;

use App\Models\joystick;
use Illuminate\Http\Request;

class JoystickController extends Controller
{
    public function create () {
        return view('joystick.create');
    }
    public function index () {
        $joysticks = joystick::all();
        return view('joystick.index', ['joysticks' => $joysticks]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'inventory_number' => 'required',
            'model' => 'required',
            'manufacturer_id' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $newjoystick = joystick::create($data);
        return redirect(route('joystick.index'));

    }
    public function edit (joystick $joystick){
        return view('joystick.edit', ['joystick' => $joystick]);
    }
    public function update (joystick $joystick, Request $request) {
        $data = $request->validate([
            'inventory_number' => 'required',
            'model' => 'required',
            'manufacturer_id' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $joystick->update($data);
        return redirect(route('joystick.index'))->with('success', 'Joystick Update Successfully');

    }
    public function destroy (joystick $joystick) {
        $joystick->delete();
        return redirect(route('joystick.index'))->with('success', 'Joystick delated Successfully');
    }
}
