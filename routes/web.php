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
    return view('welcome');
});





//lng
Route::get('lang/{locale}/', function ($locale) {
	if (in_array($locale, \Config::get('app.locales'))) {
		Cookie::queue(Cookie::forever('lang', $locale));
	}
	return redirect()->back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
