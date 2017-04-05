<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $table = 'pages_content';

    protected $fillable = ['page_id', 'version_id', 'title', 'body', 'excerpt', 'status'];
    
    protected $cast = [
        'status' => 'boolean',
        'page_id' => 'integer',
        'version_id' => 'integer'
    ];
    /**
     * Get the assoicated page 
     *
     * @return App\Page
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }


}