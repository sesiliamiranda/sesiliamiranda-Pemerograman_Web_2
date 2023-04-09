<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ObatUserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('obat', ObatController::class) ->name('index', 'obat');

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/obat_user', [ObatUserController::class, 'index'])->name('obat_user.index');
    Route::get('/obat',[ObatdController::class,'obat'])->name('obat.obat')->middleware('admin'); 

});

Route::group(['middleware' => ['admin']], function(){
    Route::get('/obat', [ObatdController::class, 'obat'])->name('obat.obat');
});

Route::resource('about', AboutController::class) ->name('index', 'about');
Route::resource('obat', ObatController::class) ->name('index', 'obat');
Route::resource('obat_user', ObatUserController::class) ->name('index', 'obat_user');

