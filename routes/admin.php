<?php

/**
 *
 * As i like to keep my stuff togethr i have copied the required routes to here
 * I'm not not using the reg/password ones so no need for these here
 *
 *
 */

$this->name('login')->get('')->uses('LoginController@showLoginForm');
$this->get('login')->uses('LoginController@showLoginForm');
$this->name('login.post')->post('login')->uses('LoginController@login');
$this->name('logout')->post('logout')->uses('LoginController@logout');

/**
 * Auth protectded routes
 */
$this->group(['middleware'=>'auth'], function () {

    $this->name('dashboard')->get('dashboard')->uses('Admin@dashboard');




});
