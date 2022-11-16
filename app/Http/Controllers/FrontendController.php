<?php

namespace App\Http\Controllers;

use App\Models\Best_casino;
use App\Models\Location;
use App\Models\Online_casino;
use App\Models\Partners;
use App\Models\Populer;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $online_casino = Online_casino::latest()->get();
        return view('frontend.index', [
            'best_casino' => Best_casino::latest()->get(),
            'partners' => Partners::latest()->get(),
            'online_casino' => $online_casino,
            'locations' => Location::latest()->get(),
            'most_populer' => Populer::latest()->get(),
            'socials' => Social::latest()->get(),
            'setting' => Setting::find(1),
        ]);
    }
}
