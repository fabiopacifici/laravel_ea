<?php

use App\Category;
use App\Game;
use App\Http\Resources\GameResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

# Senza contoller con la closure
// Tutti i games response json

/* Route::get('games', function () {
    $games = Game::all();
    return response()->json([
        'name' => 'Fabio',
        'total_results' => count($games),
        'status_code' => 200,
        'response' => $games
    ]);
}); */

// Scorciatoia non customizzabile
/* Route::get('games', function () {
    $games = Game::all();
    return $games;
}); */

// Scorciatoia con paginazione
/* Route::get('games', function () {
    $games = Game::paginate(5);
    return $games;
}); */

// Scorciatoia con relazioni ma senza paginazione
/* Route::get('games', function () {
    $games = Game::with(['category', 'platforms'])->get();
    return $games;
}); */

// Scorciatoia con relazioni e paginazione
/* Route::get('games', function () {
    $games = Game::with(['category', 'platforms'])->paginate();
    return $games;
}); */

Route::get('games', 'API\GameController@index');

Route::get('categories', function () {
    return Category::all();
});

/* API Resource singola */
Route::get('games/{game}', function (Game $game) {
    return new GameResource($game);
});


/* Protected apis outes */

Route::middleware('api_token_check')->group(function () {
    Route::get('categories', function () {
        return Category::all();
    });
});
