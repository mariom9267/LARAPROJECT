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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service/{service_id}/{service_name}', function ($service_id,$service_name) {
    return $service_id." ".$service_name;
})->name("sevice-page");
Route::get('/contact', function () {
    return view('contact');
});
Route::

