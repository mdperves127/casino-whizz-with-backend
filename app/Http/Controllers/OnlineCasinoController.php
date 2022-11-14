<?php

namespace App\Http\Controllers;

use App\Models\Online_casino;
use App\Repositories\OnlineCasinoRepository;
use Illuminate\Http\Request;

class OnlineCasinoController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\OnlineCasinoRepository $repository
     *
     */
    public function __construct(OnlineCasinoRepository $repository)
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
        return view('admin.online_casino.index',[
            'datas' => Online_casino::orderBy('id','desc')->get(),
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
            'name*' => 'required|unique:online_casinos',
            'rating*' => 'required',
            'read_more_link*' => 'required',
            'welcome_bonus*' => 'required',
            'promo_code*' => 'required',
            'hot_list*' => 'required',
            'play_now_link*' => 'required',
            'play_form_text*' => 'required',
            'photo*' => 'required|image',
        ]);
        $this->repository->store($request);
        return back()->withSuccess(__('Online Casino Added Successfully.'));
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
    public function edit(Online_casino $online)
    {
        return view('admin.online_casino.edit', [
            'online' => $online,
            'hot_list' => json_decode($online->hot_list,true),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Online_casino $online)
    {
        $request->validate([
            'name*' => 'required|unique:online_casinos,name,'.$online->id,
            'rating*' => 'required',
            'read_more_link*' => 'required',
            'welcome_bonus*' => 'required',
            'promo_code*' => 'required',
            'hot_list*' => 'required',
            'play_now_link*' => 'required',
            'play_form_text*' => 'required',
            'photo*' => 'image',
        ]);
        
        $this->repository->update($online, $request);
        return redirect()->route('online.index')->withSuccess(__('Online Casino Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Online_casino $online)
    {
        $this->repository->delete($online);
        return back()->withSuccess(__('Online Casino Deleted Successfully.'));
    }
}
