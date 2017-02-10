<?php

use Illuminate\Http\Request;

/**
 *
 * place the api route around a version prefix
 *
 */
$this->group(['prefix'=>'v1'], function (){
    /**
     * Place th epublic facing api routes here.
     */
     $this->get('')->uses(function(){
         dd('dsdddssd');
     });
     /**
      * Place the protected api routes here.
      */
    $this->group(['middleware'=>'auth:api'],function(){


    });
});
