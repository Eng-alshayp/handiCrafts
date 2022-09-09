<?php

use App\Http\Controllers\DoorController;
use App\Http\Controllers\KitchensController;
use App\Http\Controllers\WoodController;
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

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/{slug}', function ($slug) {
//    return view($slug);
//});

Route::resource('doors',DoorController::class);
Route::resource('kitchens',KitchensController::class);
Route::resource('woods',WoodController::class);

