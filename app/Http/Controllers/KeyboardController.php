<?php

namespace App\Http\Controllers;

use App\Models\keyboard;
use Illuminate\Http\Request;

class KeyboardsController extends Controller
{
    public function create () {
        return view('Keyboard.create');
    }
    public function index () {
        $Keyboards = keyboard::all();
        return view('keyboard.index', ['Keyboards' => $Keyboards]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'inventory_number' => 'required',
            'model' => 'required',
            'manufacturer_id' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $newkeyboard = keyboard::create($data);
        return redirect(route('keyboard.index'));

    }
    public function edit (keyboard $keyboard){
        return view('keyboard.edit', ['keyboard' => $keyboard]);
    }
    public function update (keyboard $keyboard, Request $request) {
        $data = $request->validate([
            'inventory_number' => 'required',
            'model' => 'required',
            'manufacturer_id' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $keyboard->update($data);
        return redirect(route('keyboard.index'))->with('success', 'Keyboard Update Successfully');

    }
    public function destroy (keyboard $keyboard) {
        $keyboard->delete();
        return redirect(route('keyboard.index'))->with('success', 'Keyboard delated Successfully');
    }
}
