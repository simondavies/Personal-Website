<?php


Route::name('home')->get('/')->uses('PagesController@index');

//Route::name('cookies')->get('/{page?}')->uses('PagesController@page')->where('page', '[A-Za-z]+');
