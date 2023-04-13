<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', ['name' => 'Иван', 'age'=> 24, 'position' => 'Normal', 'address' => 'Лунная ул, д. 666']);
});

Route::get('/contacts', function () {
    return view('contacts', ['address' => 'Смоленск', 'post_code' => 214457, 'email'=> 'Spanhbob98@mail.ru', 'phone'=> 89203000511]);
});