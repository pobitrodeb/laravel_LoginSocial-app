<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login/facebook', [SocialController::class, 'facebookRedirect'])->name('facebook');
Route::get('login/facebook/callbackpobitro', [SocialController::class, 'loginWithFacebook'])->name('facebook');


Route::get('login/google', [SocialController::class, 'googleRedirect']);
Route::get('login/google/callback', [SocialController::class, 'loginWithGoogle']);
