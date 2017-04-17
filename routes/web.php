<?php


Route::name('home')->get('/')->uses('PagesController@index');
Route::name('update')->get('/update')->uses('PagesController@browserUpdate');
//Route::name('page')->get('/{page?}')->uses('PagesController@page')->where('page', '[A-Za-z]+');
