<?php
namespace App\Repositories\Api;

use Illuminate\Http\Request;
use App\Transformers\PagesTransformer;

class PagesRepository extends Control
{
  
    /**
     * Get the requested page content to return 
     *
     * @return Response
     */
    public function requestedPage($page)
    {
        if($page) {
            return fractal()
                    ->item($page)
                    ->includeMetadata()
                    ->transformWith(New PagesTransformer)
                    ->toArray();
        } else {
            return \Response::json([
                'error'  => [
                    'message' => 'Could not find any page content to display.'
                ]
            ], 404);
        }
    }




}
