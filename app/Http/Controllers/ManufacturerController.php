<?php

namespace App\Http\Controllers;

use App\Models\manufacturer;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ManufactureController extends Controller
{
    public function read(){
        return view('manufacturer.read');
    }

    public function create(){
        return view('manufacturer.create');
    }

    public function index(){
        $manufacturers = manufacturers::all();
        return view('country.index', ['manufacturers' => $manufacturers]);

    }
    public function store(Request $request){
        $data = $request-> validate([
        'country_id' => 'required',
        'name' => 'required',
        'link' => 'required',
        'description' => 'required'
        ]);
        $newmanufacturer = manufacturer::create($data);
        return redirect(route('manufacturer.index'));
    }

    public function edit (manufacturer $manufacturer){
        return view('manufacturer.edit', ['manufacturer' => $manufaturer]);
    }
    public function update (manufacturer $manufacturer, Request $request) {
        $data = $request->validate([
            'country_id' => 'required',
            'name' => 'required',
            'link' => 'required',
            'description' => 'nullable'
            
        ]);

        $manufacturer->update($data);
        return redirect(route('manufacturer.index'))->with('success', 'Manufacturer Update Successfully');

    }
    public function destroy (manufacturer $manufacturer) {
        $manufacturer->delete();
        return redirect(route('manufacturer.index'))->with('success', 'Manufacturer delated Successfully');
    }
}


