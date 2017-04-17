<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

/**
 * Pages content tranformer
 * 
 * @author Simon Davies <simondavies@live.co.uk>
 */
class PagesContentTransformer extends TransformerAbstract
{
    /**
     * Transform the pages content into a readable API format
     *
     * @param App\Page $page The requested page content to transform
     *
     * @return array
     */
    public function transform($page)
    {
        return [
            'revision' => $page->revision,
            'title' => $page->title,
            'excerpt' => $page->excerpt,
            'body' => $page->body,
            'created_at' => $page->created_at->toIso8601String(),
            'updated_at' => ($page->updated_at) 
                        ? $page->updated_at->toIso8601String() 
                        : $page->created_at->toIso8601String()
        ];
    }

}


