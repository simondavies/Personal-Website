<?php
namespace App\Repositories\Api;

use Illuminate\Http\Request;
use App\Transformers\PagesTransformer;
use Teapot\StatusCode;

/**
 * Pages repository
 * 
 * @author Simon Davies <simondavies@live.co.uk>
 */
class PagesRepository extends Control
{

    /**
     * Get the requested page content to return 
     *
     * @param App\Page $page selected page content
     *
     * @return Response
     */
    public function requestedPage($page)
    {
        if ($page) {
            return fractal()
                    ->item($page)
                    ->transformWith(New PagesTransformer)
                    ->toArray();
        } else {
            return \Response::json(
                [
                'code' => StatusCode::NOT_FOUND,
                'error'  => [
                        'message' => 'Page does not exsist.',
                        'erroCode' => 16
                    ],
                ], StatusCode::NOT_FOUND
            );
        }
    }




}
