<?php

namespace App\Http\Controllers;

use App\Models\Other_games_category;
use Illuminate\Http\Request;

class OtherGamesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.other_game_category.index', [
            'datas' => Other_games_category::orderBy('id','desc')->get(),
        ]);
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
            'name' => 'required|unique:other_games_categories'
        ]);
        Other_games_category::create($request->except('_token'));
        return back()->withSuccess('Category Created Successfully.');
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
    public function edit(Other_games_category $other)
    {
        return view('admin.other_game_category.edit', compact('other'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Other_games_category $other)
    {
        $request->validate([
            'name' => 'required|unique:other_games_categories'
        ]);
        Other_games_category::find($other->id)->update([
            'name' => $request->name,
        ]);
        return redirect()->route('other.index')->withSuccess('Category Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other_games_category $other)
    {
        Other_games_category::find($other->id)->delete();
        return back()->withSuccess('Category Deleted Successfully.');
    }
}