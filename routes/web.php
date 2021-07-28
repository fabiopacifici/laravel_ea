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

Route::get('/', function () {
    return redirect()->route('games.index');
});

Route::get('games', function () {
    return view('guests.games.index');
})->name('games.index');

Route::get('games/{game:slug}', function () {
    return view('guests.games.show');
})->name('games.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

