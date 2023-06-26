<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// All Listings
Route::get('/', [ListingController::class, 'index']);



// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);


// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/hello', function () {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// where - ограничивает значение
// {id} - шаблон
// Route::get('/posts/{id}', function ($id) {
    // dd($id);

    //Dump, Die, Debug
    // ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// http://127.0.0.1:8000/search?name=zlata&city=zp
// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->city;
// });

// Route::get('/ururu', function () {
//     return view('ururu', [
//         'heading' => "question",
//         'ururu' => Ururu::all()
//     ]);
// });
// Route::get('/user', [UserController::class, 'index']);