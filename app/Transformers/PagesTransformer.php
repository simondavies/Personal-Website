<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Page;

/**
 *
 */
class PagesTransformer extends TransformerAbstract
{
    /**
     * What else to include in the response
     *
     * @var Array
     */
    protected $availableIncludes = ['metadata'];

    /**
     * Return a readable json respnse of the requested content
     *
     * @param App\Page $page requested page content
     *
     * @return Response
     */
    public function transform($page)
    {

        if (count($page) > 0) {
            return [
                'name' => $page->name,
                'url' => 'https://simondavies.net/' . $page->slug,
                'title' => $page->content->title,
                'excerpt' => $page->content->excerpt,
                'body' => $page->content->body,
                'creation_date' => [
                    'diffForHumans' => $page->content->created_at->diffForHumans(),
                    'readable' => $page->content->created_at->format('l j F Y')
                ],
                'updated_date' => [
                    'diffForHumans' => ($page->content->updated_at) 
                            ? $page->content->updated_at->diffForHumans() 
                            : $page->content->created_at->diffForHumans(),
                    'readable' => ($page->content->updated_at) 
                            ? $page->content->updated_at->format('l j F Y') 
                            : $page->content->created_at->format('l j F Y')
                ]
            ];
        } else {
            return \Reponse::json(['error'  => ['message' => 'Could not find the requested page.']], 404);
        }
    }
    /**
     * Get the pages metadata details
     *
     * @param App\Page $page requested page content
     *
     * @return Response
     */
    public function includeMetadata(Page $page)
    {

        return $this->item($page->metadata, New MetadataTransformer);

    }
    
}


