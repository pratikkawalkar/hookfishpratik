<?php


Route::get('/','admincontroller@getHome')->name('getHome');
Route::get('entry','admincontroller@getEntry')->name('getEntry');
Route::post('/postentry','admincontroller@postEntry')->name('postEntry');
Route::get('/admin','admincontroller@getAdmin')->name('getAdmin');
Route::get('/skip','admincontroller@getSkip')->name('getSkip');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/try', function () {
    return view('try');
});