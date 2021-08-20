<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('{locale}', function ($locale) {
    App::setLocale($locale);
    return view('home');
})->name('index');


Route::get('{locale}/features', function ($locale) {
    App::setLocale($locale);
    return view('feature');
})->name('feature');





