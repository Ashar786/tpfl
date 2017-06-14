<?php

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
use App\Hotel;

Route::get('/', function () {
    	$Hotels = new Hotel();
        $Hotels = Hotel::all();
        return view('welcome',compact('Hotels'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin','admincontroller');