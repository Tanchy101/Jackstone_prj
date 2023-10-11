<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/admin/index', [AdminController::class, 'AdminIndex'])->name('admin.index');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
