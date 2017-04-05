<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

/**
 *
 */
class MetadataTransformer extends TransformerAbstract
{
    
    public function transform($page){


        if(count($page) > 0){
            return [
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'facebook_image' => $page->facebook_img,
                'twitter_image' => $page->twitter_img,
                'google_image' => $page->google_img,
                'instagram_image' => $page->instagram_img
            ];
        } else {
            return \Reponse::json([
                'error'  => [
                    'message' => 'Could not find the requested page metadata.'
                ]
            ], 404);
        }
    }

}


