<?php

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
})->name("home");

Route::get('/wish', function () {
    return view('wish');
})->name("wish");

Route::get('/sign', function () {
    return view('sign');
})->name("sign");

Route::get('/registration', function () {
    return view('registration');
})->name("registration");

Route::post('registrated/user', "RegistrationControll@submit")->name("registrated");

Route::post('signed', "SignControll@submit")->name("signed");
