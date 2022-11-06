<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');


// Partner Controller Start
Route::resource('/dashboard/partners', App\Http\Controllers\PartnerController::class);
// Partner Controller Ends

// BestCasino Controller Start
Route::resource('/dashboard/casino/best', App\Http\Controllers\BestCasinoController::class);
// BestCasino Controller Ends
