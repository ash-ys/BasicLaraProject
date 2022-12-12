<?php

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
Route::get('/',[App\Http\Controllers\SiteController::class, 'home']);
Route::get('/feedback',[App\Http\Controllers\SiteController::class, 'feedback']);
Route::get('/services',[App\Http\Controllers\SiteController::class, 'services']);
Route::get('/aboutus',[App\Http\Controllers\SiteController::class, 'aboutus']);
Route::get('/gallery',[App\Http\Controllers\SiteController::class, 'gallery']);
Route::get('/contact',[App\Http\Controllers\SiteController::class, 'contact']);
Route::get('/works',[App\Http\Controllers\SiteController::class, 'works']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
