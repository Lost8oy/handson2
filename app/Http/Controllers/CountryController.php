<?php

namespace App\Http\Controllers;

use App\Models\country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function create () {
        return view('country.create');
    }
    public function index () {
        $counries = Country::all();
        return view('country.index', ['counties' => $counries]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        $newcountry = country::create($data);
        return redirect(route('product.index'));

    }
    public function edit (Country $country){
        return view('country.edit', ['country' => $country]);
    }
    public function update (Country $country, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        $country->update($data);
        return redirect(route('country.index'))->with('success', 'Country Update Sucesffully');

    }
    public function destroy (Country $country) {
        $country->delete();
        return redirect(route('country.index'))->with('success', 'Country delated Sucesffully');
    }
}
