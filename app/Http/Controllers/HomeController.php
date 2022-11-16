<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use App\Repositories\SettingRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SettingRepository $repository)
    {
        $this->middleware('auth');
        
        $this->repository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
    public function setting() {
        return view('admin.setting.index', [
            'setting' => Setting::find(1),
        ]);
    }
    public function settingupdate(Request $request)
    {
        $this->repository->update($request);
        return back()->withSuccess(__('Data Updated Successfully.'));
    }
}
