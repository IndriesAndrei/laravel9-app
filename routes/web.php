<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
    Common Resource Routes:
        index - Show all listings
        show - Show single listing
        create - Show form to create a listing
        store - Store new listing
        edit - Show form to edit listing
        update - Update listing
        destroy - Delete listing
*/

// All listings get ListingController index method
Route::get('/', [ListingController::class, 'index']);

// Show create form 
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);


// Single Listing get ListingController show method
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

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