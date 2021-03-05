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


Route::get('/allemployee', [App\Http\Controllers\EmployeesController::class, 'allemployee'])->name('allemployee')->middleware('auth');


Route::get('/addemployee', [App\Http\Controllers\EmployeesController::class, 'addemployee'])->name('addemployee')->middleware('auth');
Route::post('/addemployee', [App\Http\Controllers\EmployeesController::class, 'store'])->name('addemployee')->middleware('auth');

Route::get('/showdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'show'])->name('showemployee')->middleware('auth');

Route::post('/editdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'edit'])->name('editemployee')->middleware('auth');

Route::put('/editdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'update'])->name('editemployee')->middleware('auth');


Route::delete('/delete/{id}', [App\Http\Controllers\EmployeesController::class, 'destroy'])->name('deleteemployee')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
