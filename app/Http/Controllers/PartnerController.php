<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Models\Partners;
use App\Repositories\PartnerRepository;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\PartnerRepository $repository
     *
     */
    public function __construct(PartnerRepository $repository)
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
        return view('admin.partners.index', [
            'partners' => Partners::latest()->get(),
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
            'partner_logo' => 'required|image'
        ]);
        $this->repository->store($request);
        return back()->withSuccess(__('Partner Logo Added.'));
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
    public function edit(Partners $partner)
    {
        return view('admin.partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partners $partner)
    {
        $this->repository->update($partner, $request);
        return redirect()->route('partners.index')->withSuccess(__('Partner Logo Updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partners $partner)
    {
        $this->repository->delete($partner);
        return back()->withSuccess(__('Deleted Successfully.'));
    }
}