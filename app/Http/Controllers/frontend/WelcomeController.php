<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jcf\Geocode\Geocode;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function welcome()
    {

/*        $response_data = Geocode::make()->latLng(13.0827,80.2707);

        return view('welcome')->with('response_data', $response_data->formattedAddress());*/
        $response_data = ' CA ';
         return view('welcome')->with('response_data', $response_data);
    }
}