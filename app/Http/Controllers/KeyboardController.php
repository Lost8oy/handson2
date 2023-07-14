<?php

namespace App\Http\Controllers;

use App\Models\keyboard;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    public function create () {
        return view('keyboard.create');
    }
    public function index () {
        $keyboards = keyboard::all();
        return view('keyboard.index', ['keyboards' => $keyboards]);
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
