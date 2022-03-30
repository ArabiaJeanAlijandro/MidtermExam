<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class arrivalController extends Controller
{
    public function arrival() {
        return view('arrivals',
            ['arrivalDetail'=>'Cebu', 
            'time'=>'2:30 P.M',
            'airline'=>'Cebgo']);
    }  
    
}
