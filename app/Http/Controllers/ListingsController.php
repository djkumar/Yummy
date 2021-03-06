<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listings;
use App\User;
use App\States;
use App\Categories;
use App\Profiles;
use App\Listingsreviews;
class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //  $listings = listings::get();
      //       return view('backend.listings.index')->withListings($listings);
$users = User::orderBy('created_at', 'desc')->get();

	 return view('backend.listings.index')->withUsers($users); 
    }
    
     public function userindex()
    {
        //
                $this->middleware('auth');

        $listings = listings::where('created_by',\Auth::user()->id)->simplePaginate(8);
       $profiles = Profiles::where('userid',\Auth::user()->id)->first();
                return view('frontendlistings.index')->with('listings', $listings)->with('profiles',$profiles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        $states = States::get();
        $categories= Categories::get();
        return view('backend.listings.create')->withStates($states)->withCategories($categories);

    }

public function userlistingadd(){ 
    $profiles = Profiles::where('userid',\Auth::user()->id)->first();
      $states = States::get();
        $categories= Categories::get();
        return view('frontendlistings.create')->withStates($states)->withCategories($categories)->with('profile',$profiles);
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $this->validate($request, [
        'listing_name' => 'required|max:255',
        'listing_desc' => 'required',
        'listing_category' => 'required',
        'city' => 'required|max:255',
        'country' => 'required', 'state' => 'required|max:255',
        'address' => 'required', 'zipcode' => 'required|max:255',
         'end_time' => 'required|max:255',
         'emailaddress'=>'required',
        'start_time' => 'required', 'start_day' => 'required|max:255',
        'end_day' => 'required',
    ]);
    
        //
       if( listings::create($request->all())) {
                         $request->session()->flash('success', 'Added successfully!');

       }
          if($request->hasFile('listing_logo')){
           $logo_for = $request->file('listing_logo');
           $filename = time().'.'.$logo_for->getClientOriginalExtension();
           $listing->listing_logo = $filename;
           
          $logo_for->move(public_path('/uploads/listing_logo/'), $filename);
        $listing->update(['listing_logo' => $filename]);
        }
        
        return  redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
 $states = States::get();
        $categories= Categories::get();
        $listing = Listings::find($id);

        return view('backend/listings/edit')->withListing($listing)->withStates($states)->withCategories($categories);

    }
    
    
    public function userlistingedit($id){ 
        
         $states = States::get();
        $categories= Categories::get();
        $listing = Listings::find($id);
    $profiles = Profiles::where('userid',\Auth::user()->id)->first();

        return view('frontendlistings/edit')->withListing($listing)->withStates($states)->withCategories($categories)->with('profile',$profiles);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $listing = Listings::findOrFail($id);
        
       
         $this->validate($request, [
        'listing_name' => 'required|max:255',
        'listing_desc' => 'required',
        'listing_category' => 'required',
        'city' => 'required|max:255',
        'country' => 'required', 'state' => 'required|max:255',
        'address' => 'required', 'zipcode' => 'required|max:255',
         'end_time' => 'required|max:255',
         'emailaddress'=>'required',
        'start_time' => 'required', 'start_day' => 'required|max:255',
        'end_day' => 'required',
    ]);
    
    
        if($listing->update($request->all())){
              $request->session()->flash('success', 'Updated successfully!');

        }
        
         if($request->hasFile('listing_logo')){
           $logo_for = $request->file('listing_logo');
           $filename = 'listing_'.$id.'.'.$logo_for->getClientOriginalExtension();
           $listing->listing_logo = $filename;
           
          $logo_for->move(public_path('/uploads/listing_logo/'), $filename);
        $listing->update(['listing_logo' => $filename]);
        }
        
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function showlisting($id){ 
              $states = States::get();
        $categories= Categories::get();
        $listing = Listings::find($id);
 $listing_reviews = Listingsreviews::Where('listing_id',$id)->join('profiles', 'listings_reviews.created_by', '=', 'profiles.userid')->get();


        return view('frontendlistings/show')->withListing($listing)->withStates($states)->withCategories($categories)->with('user', @\Auth::user())->with('listingreviews',@$listing_reviews);
    }
        
}
