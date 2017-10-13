<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jcf\Geocode\Geocode;
use App\Listings;
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
$listings = Listings::get();
        return view('welcome')->with('response_data', '')->with('listings', $listings);
       
        
    }
    
     public function getcity(Request $request)
    {


       $response_data = Geocode::make()->latLng($request->input('lat'),$request->input('lng'));
$response_data = $response_data->formattedAddress();
        return $response_data;
       
        
    }
}