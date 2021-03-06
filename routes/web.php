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

Auth::routes();

Route::get('/', function () {
    return view('layouts.funzione1');
});

Route::get('/test', function () {
    return view('test');
});

Route::middleware('auth')->name('admin.')->prefix('admin')->namespace('Admin')->group(
    function () {

        // rotte autenticate

    }
);



Route::get('/home', 'HomeController@index')->name('home');
