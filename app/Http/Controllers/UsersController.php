<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Profiles;
use App\Listings;
Class UsersController extends Controller{


 public function __construct()
    {
        $this->middleware('auth:admin');
    }


public function index(){
	$users = User::orderBy('created_at', 'desc')->get();

	 return view('backend.users')->withUsers($users);
}
public function profile($id){
    	$user = User::findOrFail($id);
    	$profiledata = Profiles::where('userid',$id)->first();
    	$listings = Listings::Where('created_by',$id)->get();
	    return view('backend.users.profile')->withUser($user)->withListings($listings)->with('userdata',$profiledata);
}
public function show($id, $list_id){
    
    	$listings = Listings::findOrFail($list_id);
	    return view('backend.users.show')->withListing($listings);
}
}


?>