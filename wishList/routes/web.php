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

Route::post('/new_wish',  "WishControll@submit")->name("add_wish");

Route::get('/login/logout', "SignControll@LogoutUser")->name("logout_form");

Route::get('/wish/redaction/{id}', "WishControll@redactionWish")->name("redaction");
Route::post('/wish/redaction/{id}', "WishControll@redactionWishUpdate")->name("update");

Route::get('/wish/delete/{id}', "WishControll@deleteWish")->name("delete");
