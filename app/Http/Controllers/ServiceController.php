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
}
