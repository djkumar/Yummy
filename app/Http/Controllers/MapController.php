<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Listings;
Class MapController extends Controller { 

public function index(){ 
//  return view('map');


    $position['latitude'] = '34.1095345';
    $position['longitude'] = '-105.45';

 $listings = Listings::get();

 return view('map')->with('lists',$listings)->with('position', $position);
 
 
}

public function show(){ 
    
            $listings = Listings::get();

 return view('map')->with('listing',$listings);

}

public function homesearch(Request $request){ 


$circle_radius = 3959;
$max_distance = 50;
$_distance = 50;


  $listings = DB::select(
               'SELECT * FROM
                    (SELECT * , (' . $circle_radius . ' * acos(cos(radians(' . $request->latitude  . ')) * cos(radians(latitude)) *
                    cos(radians(longitude) - radians(' . $request->longitude  . ')) +
                    sin(radians(' . $request->latitude  . ')) * sin(radians(latitude))))
                    AS distance
                    FROM listings) AS distances
                WHERE distance < ' . $max_distance . '
                ORDER BY distance
               
            ');
            
          $listings_all = Listings::get();

            
$position = array('latitude'=>$request->latitude, 'longitude'=>$request->longitude);

 return view('map')->with('listings_all',$listings_all)->with('lists',$listings)->with('position', $position);
 
 
}


public function ajaxsearch(Request $request){ 


$circle_radius = 3959;
$max_distance = 50;
 

            
  $listings = DB::select(
               'SELECT * FROM
                    (SELECT * , (' . $circle_radius . ' * acos(cos(radians(' . $request->latitude  . ')) * cos(radians(latitude)) *
                    cos(radians(longitude) - radians(' . $request->longitude  . ')) +
                    sin(radians(' . $request->latitude  . ')) * sin(radians(latitude))))
                    AS distance
                    FROM listings) AS distances
                WHERE distance < ' . $max_distance . '
                ORDER BY distance
               
            ');
            
            
$position = array('latitude'=>$request->latitude, 'longitude'=>$request->longitude);
 return view('ajax-map')->with('lists', $listings)->with('position', $position);


 
}

}



?>