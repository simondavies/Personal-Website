<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Api\PagesRepository;
use App\Page;

class PagesController extends Controller
{
    function __construct(){
        $this->repository = new PagesRepository();
    }

    public function page(Page $page){

        $test = $this->repository->requestedPage($page);
        dd($test);
    }
    
}
