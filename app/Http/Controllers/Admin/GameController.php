<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request
        $validateData = $request->validate([
            // validare i dati
            'name' => 'required | min:3 | max:100',
            'thumb' => 'required | image | max:50'
        ]);

        // Store the image
        $file_path = Storage::put('game_thumbs', $validateData['thumb']);
        $validateData['thumb'] = $file_path;
        // creare la risora
        $game = Game::create($validateData);
        // return redirect
        return redirect()->route('admin.games.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
          // validate request
        $validateData = $request->validate([
            // validare i dati
            'name' => 'required | min:3 | max:100',
            'thumb' => 'required | image | max:50'
        ]);

        if(array_key_exists('thumb', $validateData)){
            Storage::delete($game->thumb);
            // Store the image
            $file_path = Storage::put('game_thumbs', $validateData['thumb']);
            $validateData['thumb'] = $file_path;
        }
        
        // creare la risora
        $game->update($validateData);
        // return redirect
        return redirect()->route('admin.games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->back()->with('message', 'Game deleted');
    }
}
