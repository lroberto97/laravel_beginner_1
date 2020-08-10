<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about(){
    
        /*view() accept a second parameter, which is the data we're gonna pass to our view.
        If the variable's name is the same as the name in the array, we can use the function 
        compact() as a shortcut, and this will generate the exact same array as we had before*/
        return view('about');
    }

    public function services(){
        $services = [
            'Service 1',
            'Service 2',
            'Service 3',
            'Service 4',
        ];
        
        //compact() if we're gonna use the same name as the variable
        return view('services', compact('services'));
    }
}
