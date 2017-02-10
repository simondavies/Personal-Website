<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

class Pages extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
        dd('pages index');
    }
}
