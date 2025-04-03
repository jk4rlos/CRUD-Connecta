<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
}) ->name('dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('user.login');

Route::post('/login', [LoginController::class, 'logged']) ->name('user.logged');

Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');


Route::get('create-user-login',[LoginController::class,'create'])->name('login.create-user');

Route::post('store-user-login',[LoginController::class,'store'])->name('login.store-user');




Route::group(['middleware' => 'auth'], function(){

Route::match(['get', 'post'], '/index-user', [UserController::class, 'index'])->name('user.index');

Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');

Route::get('/create-user',[UserController::class,'create'])->name('user.create');

Route::post('/store-user',[UserController::class,'store'])->name('user.store');

Route::get('/edit-user/{user}',[UserController::class,'edit'])->name('user.edit');

Route::put('/update-user/{user}',[UserController::class,'update'])->name('user.update');

Route::delete('/destroy-user/{user}',[UserController::class,'destroy'])->name('user.destroy');

});