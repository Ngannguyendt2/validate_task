<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function index()
    {
        $cities = City::all();
        return view('cities.list', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $city = new City;
        $city->name = $request->city;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->customers()->delete();
        $city->delete();
        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $city = City::find($id);
        return view('cities.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->name = $request->city;
        $city->save();
        return redirect()->route('cities.index');
    }
    public function detail($id){
        $city = City::find($id);
        $customers=Customer::all();
        return view('cities.customer',compact('city','customers'));
    }
}
