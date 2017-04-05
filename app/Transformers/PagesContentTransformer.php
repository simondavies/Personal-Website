<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

/**
 *
 */
class PagesContentTransformer extends TransformerAbstract
{
    
    public function transform($page){


        if(count($page) > 0){
            return [
                'title' => $page->title,
                'excerpt' => $page->excerpt,
                'body' => $page->body,
                'creation_date' => [
                    'diffForHumans' => $page->created_at->diffForHumans(),
                    'readable' => $page->created_at->format('l j F Y')
                ],
                'updated_date' => [
                    'diffForHumans' => ($page->updated_at) 
                            ? $page->updated_at->diffForHumans() 
                            : $page->created_at->diffForHumans(),
                    'readable' => ($page->updated_at) 
                            ? $page->updated_at->format('l j F Y') 
                            : $page->created_at->format('l j F Y')
                ]
            ];
        } else {
            return \Reponse::json([
                'error'  => [
                    'message' => 'Could not find the requested page content.'
                ]
            ], 404);
        }
    }

}


