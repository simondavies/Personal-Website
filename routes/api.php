<?php

use Illuminate\Http\Request;

/**
 * Place the api route around a version prefix
 */
$this->group(['prefix'=>'v1'], function () {

    $this->get('/page/{page}', ['uses'=>'PagesController@page', 'as'=>'api.pages.page']);
     /**
      * Place the protected api routes here.
      */
    $this->group(['middleware'=>'auth:api'], function () {


    });
});
