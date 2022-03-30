<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class departureController extends Controller
{
    public function departure() {
        return view('departures',
            ['departure'=>'Puerto Princesa', 
            'time'=>'1:30 P.M',
            'airline'=>'PAL Express']);
    }

}
