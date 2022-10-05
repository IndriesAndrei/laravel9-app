<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All listings
Route::get('/', function () {
    // we can pass data to the view
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all() // using Listing model and get static function all()
    ]);
});

// Single Listing using Route model binding
Route::get('/listings/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

// Route::get('/response', function() {
//     // we can get response type with custom headers type and content
//     return response('<h1>Hello from response page</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// // Routes can use wildcards (ex: post/{post_id} )
// Route::get('/post/{id}', function($id) {
//     // dd($id); // stops the code and show id
//     // ddd($id); // dump, die, debug shows a lot of information (ex: laravel version, php version)
//     return response('Post ' . $id);
// })->where('id', '[0-9]+'); // we can force type ex: numbers only from 0-9

// // getting requests ex(search?name=Brad&city=Boston)
// Route::get('/search', function(Request $request) {
//     // dd($request);
//     return $request->name . ' ' . $request->city;
// });