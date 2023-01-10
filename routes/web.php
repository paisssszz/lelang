<?php

use App\Http\Controllers\beranda;
use App\Http\Controllers\lobby;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('login',[LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('logout','logout');
});

// Route::group(['middleware' => ['auth']],function(){
//     Route::group(['middleware' =>['cekUserLogin:1']],function(){
//         Route::resource('beranda',beranda::class);
//     });

// });
Route::group(['middleware' => ['auth','cekUserLogin:1']], function() {
    Route::resource('beranda',beranda::class);
});

Route::group(['middleware' => ['auth','cekUserLogin:2']], function() {
    Route::resource('lobby',lobby::class);
});


// Route::group(['middleware' => ['auth']],function(){
//     Route::group(['middleware' =>['cekUserLogin:2']],function(){
//         Route::resource('lobby',lobby::class, 'index');
//     });
// });


