<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoletasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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
    return view('home');
});

/* Routes para el login*/
Route::get('/login', [SessionController::class, 'create'])->name('login.index');

Route::get('/registro', [RegisterController::class, 'create'])->name('register.index');

/* Routes para las boletas */

Route::get('/permiso',  [BoletasController::class,'index'])->name('boletas');

Route::post('/permiso', [BoletasController::class, 'store'])->name('boletas');

