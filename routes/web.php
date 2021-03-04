<?php

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
})->middleware('guest');


Route::get('/logout', function () {
    return view('welcome');
})->middleware('guest');;


Route::get('/showemployee', [App\Http\Controllers\EmployeesController::class, 'showemployee'])->name('showemployee')->middleware('auth');
Route::get('/addemployee', [App\Http\Controllers\EmployeesController::class, 'addemployee'])->name('addemployee')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
