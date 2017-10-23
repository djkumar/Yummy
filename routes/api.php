<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});


Use App\Listings;
Use App\Brands;

Route::group(['middleware' => 'auth:api'], function () {

Route::get('listings', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Listings::all();
});
 
Route::get('listings/{id}', function($id) {
    return Listings::find($id);
});

Route::post('listings', function(Request $request) {
    return Listings::create($request->all);
});

Route::put('listings/{id}', function(Request $request, $id) {
    $article = Listings::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('listings/{id}', function($id) {
    Listings::find($id)->delete();

    return 204;
});


Route::get('brands', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Brands::all();
});
 
Route::get('brands/{id}', function($id) {
    return Brands::find($id);
});

Route::post('brands', function(Request $request) {
    return Brands::create($request->all);
});

Route::put('brands/{id}', function(Request $request, $id) {
    $article = Brands::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('brands/{id}', function($id) {
    Brands::find($id)->delete();

    return 204;
});


});
