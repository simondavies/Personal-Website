<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Page;

/**
 * Pages api content tranformer 
 * 
 * @author Simon Davies <simondavies@live.co.uk>
 */
class PagesTransformer extends TransformerAbstract
{
    /**
     * Assign the associated tranformers to include in the response
     *
     * @var Array
     */
    protected $defaultIncludes = ['content','metadata'];

    /**
     * Transform the page details into a readable API format
     *
     * @param App\Page $page requested page content
     *
     * @return Response
     */
    public function transform($page)
    {

        return [
            'id' => $page->uuid,
            'name' => $page->name,
            'uri' => $page->slug,
            'created_at' => $page->content->created_at->toIso8601String(),
            'updated_at' => ($page->content->updated_at) 
                        ? $page->content->updated_at->toIso8601String() 
                        : $page->content->created_at->toIso8601String()
        ];
        
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

    /**
     * Get the pages metadata details
     *
     * @param App\Page $page requested page content
     *
     * @return Response
     */
    public function includeContent(Page $page)
    {
        
        return $this->item($page->content, New PagesContentTransformer);

    }
    
}


