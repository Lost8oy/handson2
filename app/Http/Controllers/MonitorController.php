<?php

namespace App\Http\Controllers;

use App\Models\monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function create () {
        return view('monitor.create');
    }
    public function index () {
        $monitors = monitor::all();
        return view('monitor.index', ['monitors' => $monitors]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'inventory_number' => 'required',
            'model' => 'required',
            'manufacturer_id' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $newmonitor = monitor::create($data);
        return redirect(route('monitor.index'));

    }
    public function edit (monitor $monitor){
        return view('monitor.edit', ['monitor' => $monitor]);
    }
    public function update (monitor $monitor, Request $request) {
        $data = $request->validate([
            'inventory_number' => 'required',
            'model' => 'required',
            'manufacturer_id' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $monitor->update($data);
        return redirect(route('monitor.index'))->with('success', 'Monitor Update Successfully');

    }
    public function destroy (monitor $monitor) {
        $monitor->delete();
        return redirect(route('monitor.index'))->with('success', 'Monitor delated Successfully');
    }
}
