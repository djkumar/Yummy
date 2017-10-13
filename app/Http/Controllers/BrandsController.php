<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brands;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function index()
    {

        $brands = Brands::where('deleted','0')->orderBy('created_at', 'desc')->get();

        //
        return view('backend.brands.index')->withBrands($brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('backend.brands.create');
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



         //  $brands = new Brands( $request->all());
        Brands::create($request->all());
        return view('backend.brands.create');


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

          $brand = Brands::find($id);

    // show the edit form and pass the category
    return view('backend.brands.edit')->withBrand($brand);



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

    $brands = Brands::findOrFail($id);


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

    $brands = Brands::findOrFail($id);

$brands->deleted=1;
               $brands->update(array('deleted'=>$brands->deleted));



    return redirect()->back();


    
    }
}
