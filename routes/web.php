<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/cities', function () {
    return view('cities');
});
Route::get('/universities', function () {
    return view('universities');
});
Route::get('/aboutus', function () {
    return view('about');
});
Route::get('/contactus', function () {
    return view('contact');
});
