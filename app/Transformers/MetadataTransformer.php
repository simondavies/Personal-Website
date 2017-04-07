<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

/**
 * Pages metadata content tranformer
 * 
 * @author Simon Davies <simondavies@live.co.uk>
 */
class MetadataTransformer extends TransformerAbstract
{
    /**
     * Transform the pages metadata into a readable API format
     *
     * @param App\Page $page the requested pages metadata content to transform
     *
     * @return array
     */
    public function transform($page)
    {

        return [
            'title' => $page->title,
            'description' => $page->description,
            'keywords' => $page->keywords,
            'facebook_image' => $page->facebook_img,
            'twitter_image' => $page->twitter_img,
            'google_image' => $page->google_img,
            'instagram_image' => $page->instagram_img
        ];
        
    }

}


