<?php

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


//Test Unitaire

/*
Route::get('/', function () {
    return 'coucou';
});
*/

Route::get('/', function () {
    return view('welcome') -> with('message', 'yo');
});

//Test unitaire Controller
Route::get('welcome', 'ViewController@getPageWelcome');




