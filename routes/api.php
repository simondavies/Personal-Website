<?php

use Illuminate\Http\Request;

/**
 *
 * place the api route around a version prefix
 *
 */
$this->prefix('v1')->group(function (){
    /**
     * Place th epublic facing api routes here.
     */


    $this->middleware('auth:api')->group(function(){
        /**
         * Place the protected api routes here.
         */


    });
});
