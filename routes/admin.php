<?php

/**
 *
 * As i like to keep my stuff togethr i have copied the required routes to here
 * I'm not not using the reg/password ones so no need for these here
 *
 *
 */

$this->get('', 'Auth\LoginController@showLoginForm')->name('login');
$this->get('login', 'Auth\LoginController@showLoginForm');
$this->post('login', 'Auth\LoginController@login')->name('login.post');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

/**
 * Auth protectded routes
 */
$this->group(['middleware'=>'auth'], function () {

    $this->name('dashboard')->get('dashboard')->uses('Admin@dashboard');




});
