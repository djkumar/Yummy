<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriptions;
use App\Users;
use App\Profiles;
class SubscriptionsController extends Controller
{
    //

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function index()
    {

        $brands = Subscriptions::orderBy('created_at', 'desc')->get();

        return view('backend.subscriptions.index')->withSubscriptions($brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('backend.subscriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



         //  $brands = new Subscriptions( $request->all());
        Subscriptions::create($request->all());
        return view('backend.subscriptions.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
          $brands = Subscriptions::orderBy('created_at', 'desc')->get();

        return view('backend.subscriptions.subscriptions')->withSubscriptions($brands)->with('userid',$request->userid);
    }

  public function buy( Request $request)
    {

        //
          $brands = Subscriptions::where('id',$request->subscribeid)->first();
          
$profile_data = Profiles::where('userid',$request->userid)->first();

        return view('backend.subscriptions.invoice')->withSubscriptions($brands)->with('profiledata',$profile_data);
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

          $brand = Subscriptions::find($id);

    // show the edit form and pass the category
    return view('backend.subscriptions.edit')->withSubscription($brand);



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

    $brands = Subscriptions::findOrFail($id);


               $brands->update($request->all());



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
    
}
