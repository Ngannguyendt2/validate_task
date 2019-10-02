<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(3);
        return view('customers.list', ['customers' => $customers]);
    }

    public function create()
    {
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        $cities = City::all();
        return view('customers.edit', compact('customer', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        if(!$keyword){
            return redirect()->route('customers.index');
        }
        $customers=Customer::where('name','LIKE','%'.$keyword.'%')->paginate(3);
        return view('customers.list', ['customers' => $customers]);
    }
}
