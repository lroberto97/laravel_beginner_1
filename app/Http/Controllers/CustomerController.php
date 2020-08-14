<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        //Get all customers from DB
        $customers = \App\Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create(){
        return view('customer.create');
    }

    public function store(){
        \App\Customer::create($this->validatedData());

        return redirect('/customers');
    }

    /* Recieving parameter from url */
    /* This is route model binding, laravel try to find that customer in our DB,
    if is not then send 404, is the same as findOrFail, see previous commit,
    if is found then send it to our view with the same name 'customer',
    parameter in the route and in the mehtod need same name */
    public function show(\App\Customer $customer){
        return view('customer.show', compact('customer'));
    }

    public function edit(\App\Customer $customer){
        return view('customer.edit', compact('customer'));
    }

    public function update(\App\Customer $customer){
        /* Update data with update() */
        $customer->update($this->validatedData());

        return redirect('/customers');
    }

    public function destroy(\App\Customer $customer){
        /* Delete data with delete() */
        $customer->delete();

        return redirect('/customers');
    }

    protected function validatedData(){
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
    }
}
