<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Page Model
 */
class Page extends Model
{
    protected $fillable = ['parent_id', 'name', 'slug', 'template', 'status'];

    protected $cast = [
        'status' => 'boolean',
        'parent_id' => 'integer'
    ];

    /**
     * Automate the slug creation on session_save_path
     *
     * @param String $value the strign to conert into slug
     *
     * @return string
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }
}
