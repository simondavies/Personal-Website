<?php


Route::name('home')->get('/')->uses('PagesController@index');

Route::name('cookies')->get('/{slug?}')->uses('PagesController@page');
