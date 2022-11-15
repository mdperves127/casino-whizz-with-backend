<?php

namespace App\Http\Controllers;

use App\Models\Populer;
use Illuminate\Http\Request;

class PopulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.populer.index', [
            'datas' => Populer::latest()->get(),
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
        Populer::create($request->except('_token'));
        return back()->withSuccess('Most Populer Added Successfully.');
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
    public function edit(Populer $populer)
    {
        return view('admin.populer.edit', compact('populer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Populer $populer)
    {
        Populer::find($populer->id)->update($request->except('_token'));
        return redirect()->route('populer.index')->withSuccess('Populer Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Populer $populer)
    {
        Populer::find($populer->id)->delete();
        return back()->withSuccess('Populer Deleted Successfully.');
    }
}