<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolUserController;

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






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::resource('schools',  SchoolController::class);
Route::resource('schools-users',  SchoolUserController::class);



Auth::routes();
