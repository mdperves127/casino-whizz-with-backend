<?php

namespace App\Http\Controllers;

use App\Models\Best_casino;
use App\Repositories\BestCasinoRepository;
use Illuminate\Http\Request;

class BestCasinoController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\BestCasinoRepository $repository
     *
     */
    public function __construct(BestCasinoRepository $repository)
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
        return view('admin.best_casino.index', [
            'bests' => Best_casino::latest()->get(),
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
            'title' => 'required',
            'percent' => 'required',
            'button_link' => 'required',
            'photo' => 'required|image'
        ]);
        $this->repository->store($request);
        return back()->withSuccess(__('Best Casino Added.'));
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
    public function edit(Best_casino $best)
    {
        return view('admin.best_casino.edit',compact('best'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Best_casino $best)
    {
        $this->repository->update($best, $request);
        return redirect()->route('best.index')->withSuccess(__('Best Casino Updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Best_casino $best)
    {
        $this->repository->delete($best);
        return back()->withSuccess(__('Best Casino Deleted.'));
    }
}