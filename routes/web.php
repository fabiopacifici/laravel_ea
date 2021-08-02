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

Route::get('vue-games', function () {
    return view('games');
});


Auth::routes();



Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('games', GameController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('platforms', PlatformController::class);
    Route::post('api-token', 'ApiTokenController@update')->name('api_token');

});

// games/{game}/details

// DB
/*
# games table
- id
- title
- thumb

# gameDetails (one to one)
- cover_image
- motte
- summary
- description
- youtube_url


# categories (one to many)
-id
-name
-slug

# platforms (many to many)
- id
- nome
- slug
- logo
*/
