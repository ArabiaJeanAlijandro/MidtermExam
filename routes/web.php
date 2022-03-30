<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\departureController;
use App\Http\Controllers\arrivalController;
use App\Providers\RouteServiceProvider;

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

Route::get('/arrivals','App\Http\Controllers\arrivalController@arrival');
Route::get('/welcome','App\Http\Controllers\arrivalController@arrival');
Route::get('/departures','App\Http\Controllers\departureController@departure');

