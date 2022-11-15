<?php

namespace App\Http\Controllers;

use App\Models\Other_game;
use App\Models\Other_games_category;
use App\Repositories\OtherGamesRepository;
use Illuminate\Http\Request;

class OtherGamesController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\OnlineCasinoRepository $repository
     *
     */
    public function __construct(OtherGamesRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Other_games_category::latest()->get();
        $datas = Other_game::latest()->get();
        return view('admin.other_game.index', compact('datas', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'nullable|unique:other_games',
            'category' => 'nullable',
            'rate' => 'nullable',
            'link' => 'nullable',
            'photo' => 'required|image',
        ]);
        
        $this->repository->store($request);
        return back()->withSuccess('Game Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Other_game $game)
    {
        return view('admin.other_game.edit', [
            'game' => $game
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Other_game $game)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'nullable|unique:other_games',
            'category' => 'nullable',
            'rate' => 'nullable',
            'link' => 'nullable',
            'photo' => 'required|image',
        ]);
        $this->repository->update($game, $request);
        return redirect()->route('game.index')->withSuccess('Game Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other_game $game)
    {
        $this->repository()->delete($game);
        return back()->withSuccess('Games Deleted Successfully.');
    }
}