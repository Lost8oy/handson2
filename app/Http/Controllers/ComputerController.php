<?php

namespace App\Http\Controllers;

use App\Models\computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function create () {
        return view('computer.create');
    }
    public function index () {
        $computers = computer::all();
        return view('computer.index', ['computers' => $computers]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'inventory_number' => 'required',
            'model' => 'required',
            'submodel' => 'required',
            'processor' => 'required',
            'power' => 'required',
            'speed' => 'required',
            'country' => 'required',
            'date' => 'required',
            'bit' => 'required',
            'description' => 'nullable'
        ]);

        $newcomputer = computer::create($data);
        return redirect(route('computer.index'));

    }
    public function edit (computer $computer){
        return view('computer.edit', ['computer' => $computer]);
    }
    public function update (computer $computer, Request $request) {
        $data = $request->validate([
            'inventory_number' => 'required',
            'model' => 'required',
            'submodel' => 'required',
            'processor' => 'required',
            'power' => 'required',
            'speed' => 'required',
            'country' => 'required',
            'date' => 'required',
            'bit' => 'required',
            'description' => 'nullable'
        ]);

        $computer->update($data);
        return redirect(route('computer.index'))->with('success', 'Computer Update Successfully');

    }
    public function destroy (computer $computer) {
        $computer->delete();
        return redirect(route('computer.index'))->with('success', 'Computer delated Successfully');
    }
}
