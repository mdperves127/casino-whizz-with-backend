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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/setting', [App\Http\Controllers\HomeController::class, 'setting'])->name('admin.setting');
Route::post('/admin/setting', [App\Http\Controllers\HomeController::class, 'settingupdate'])->name('admin.setting.update');


// Partner Controller Start
Route::resource('/dashboard/partners', App\Http\Controllers\PartnerController::class);
// Partner Controller Ends

// BestCasino Controller Start
Route::resource('/dashboard/casino/best', App\Http\Controllers\BestCasinoController::class);
// BestCasino Controller Ends

// OnlineCasino Controller Start
Route::resource('/dashboard/casino/online', App\Http\Controllers\OnlineCasinoController::class);
// OnlineCasino Controller Ends

// OtherGamesCategoryController Start
Route::resource('/dashboard/game/category/other', App\Http\Controllers\OtherGamesCategoryController::class);
// OtherGamesCategoryController Ends

// OtherGamesController Start
Route::resource('/dashboard/other/game', App\Http\Controllers\OtherGamesController::class);
// OtherGamesController Ends

// SocialController Start
Route::resource('/dashboard/social', App\Http\Controllers\SocialController::class);
// SocialController Ends

// PopulerController Start
Route::resource('/dashboard/populer', App\Http\Controllers\PopulerController::class);
// PopulerController Ends
// LocationController Start
Route::resource('/dashboard/location', App\Http\Controllers\LocationController::class);
// LocationController Ends
