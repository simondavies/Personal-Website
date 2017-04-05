<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $table = 'metadata';

    protected $fillable = [
            'meta_title', 
            'meta_description', 
            'meta_keywords', 
            'facebook_img', 
            'twitter_img',
            'google_img',
            'instagram_img',
            'metadatable_id',
            'metadatable_type'
        ];
    
}
