<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/register', 'register')->name('register')->middleware('nonLogin');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login')->middleware('nonLogin');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/portfolio', function(){
    return view('portfolio');
})->name('portfolio')->middleware('auth');


