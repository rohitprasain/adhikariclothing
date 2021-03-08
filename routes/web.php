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

Route::get('/editdetail/{id}', function(){
    return abort(403, 'Unauthorized action.');
});

//employeecontroller
Route::get('/allemployee', [App\Http\Controllers\EmployeesController::class, 'allemployee'])->name('allemployee')->middleware('auth');

Route::get('/addemployee', [App\Http\Controllers\EmployeesController::class, 'addemployee'])->name('addemployee')->middleware('auth');
Route::post('/addemployee', [App\Http\Controllers\EmployeesController::class, 'store'])->name('addemployee')->middleware('auth');

Route::get('/showdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'show'])->name('showemployee')->middleware('auth');

Route::post('/editdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'edit'])->name('editemployee')->middleware('auth');
Route::put('/editdetail/{id}', [App\Http\Controllers\EmployeesController::class, 'update'])->name('editemployee')->middleware('auth');

Route::delete('/delete/{id}', [App\Http\Controllers\EmployeesController::class, 'destroy'])->name('deleteemployee')->middleware('auth');

//auth routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//landingcontroller

// Route::get('/welcomehome', [App\Http\Controllers\LandingController::class, 'welcomehome'])->name('welcomehome')->middleware('guest');
Route::get('/welcomestore', [App\Http\Controllers\LandingController::class, 'welcomestore'])->name('welcomestore')->middleware('guest');
Route::get('/welcomecontact', [App\Http\Controllers\LandingController::class, 'welcomecontact'])->name('welcomecontact')->middleware('guest');

Route::post('/sendmessage', [App\Http\Controllers\LandingController::class, 'storemessage'])->name('sendmessage')->middleware('guest');

//orderscontroller

Route::get('/allorders', [App\Http\Controllers\OrdersController::class, 'allorder'])->name('allorder')->middleware('auth');
Route::delete('/deleteorder/{id}', [App\Http\Controllers\OrdersController::class, 'destroy'])->name('deleteorder')->middleware('auth');

Route::post('/storeorder/{productid}/{productname}/{size}/{price}', [App\Http\Controllers\OrdersController::class, 'storeorder'])->name('storeorder')->middleware('guest');


//productscontroller

Route::get('/addproduct', [App\Http\Controllers\ProductsController::class, 'index'])->name('addproduct')->middleware('auth');
Route::post('/addproduct', [App\Http\Controllers\ProductsController::class, 'store'])->name('addproduct')->middleware('auth');

Route::get('/showproductdetail/{id}', [App\Http\Controllers\ProductsController::class, 'showproductdetail'])->name('showproductdetail')->middleware('guest');


//messagecontroller

Route::get('/allmessages', [App\Http\Controllers\MessageController::class, 'allmessage'])->name('allmessages')->middleware('auth');
Route::delete('/deletemessage/{id}', [App\Http\Controllers\MessageController::class, 'destroy'])->name('deletemessage')->middleware('auth');
