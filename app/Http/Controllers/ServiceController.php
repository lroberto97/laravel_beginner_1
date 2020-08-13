<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        //This way we can bring all services in our db
        $services = \App\Service::all();
        //compact() if we're gonna use the same name as the variable
        return view('service.index', compact('services'));
    }

    public function store(){
        //Adding validation to the data
        $data = request()->validate([
            //name is gonna be required so it can't be empty
            //Use | to add another validation, in this case min 5 characters
            'name' => 'required|min:5'
        ]);
        /* Create a new service, add the name from the request to the new service
        save the service in th DB */
        $service = new \App\Service();
        $service->name = request('name');
        $service->save();
        //Returning to the same page
        return redirect()->back();
    }
}
