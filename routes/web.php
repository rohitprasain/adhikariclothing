<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcomehome');
})->middleware('guest')->name('welcomehome');


//dashboard routes
Route::get('/logout', function () {
    return view('layouts.welcome');
})->middleware('guest');;


Route::get('/allemployee', [App\Http\Controllers\EmployeesController::class, 'allemployee'])->name('allemployee')->middleware('auth');

Route::get('/addemployee', [App\Http\Controllers\EmployeesController::class, 'addemployee'])->name('addemployee')->middleware('auth');
Route::post('/addemployee', [App\Http\Controllers\EmployeesController::class, 'store'])->name('addemployee')->middleware('auth');

Route::get('/showdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'show'])->name('showemployee')->middleware('auth');

Route::get('/editdetail/{id}', function(){
    return abort(403, 'Unauthorized action.');

});
Route::post('/editdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'edit'])->name('editemployee')->middleware('auth');
Route::put('/editdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'update'])->name('editemployee')->middleware('auth');

Route::delete('/delete/{id}', [App\Http\Controllers\EmployeesController::class, 'destroy'])->name('deleteemployee')->middleware('auth');
Route::delete('/deletemessage/{id}', [App\Http\Controllers\MessageController::class, 'destroy'])->name('deleteemployee')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//homepage routes

// Route::get('/welcomehome', [App\Http\Controllers\LandingController::class, 'welcomehome'])->name('welcomehome')->middleware('guest');
Route::get('/welcomestore', [App\Http\Controllers\LandingController::class, 'welcomestore'])->name('welcomestore')->middleware('guest');
Route::get('/welcomecontact', [App\Http\Controllers\LandingController::class, 'welcomecontact'])->name('welcomecontact')->middleware('guest');

Route::post('/sendmessage', [App\Http\Controllers\LandingController::class, 'storemessage'])->name('sendmessage')->middleware('guest');





Route::get('/allmessages', [App\Http\Controllers\MessageController::class, 'allmessage'])->name('allmessages')->middleware('auth');
Route::delete('/deletemessage/{$id}', [App\Http\Controllers\MessageController::class, 'destroy'])->name('deletemessage')->middleware('auth');
