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
  Mail::to("raghavaramg@gmail.com")->send(new App\Mail\SukorEmail());
  //eturn new App\Mail\SukorEmail();
});
