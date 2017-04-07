<?php

namespace App;

use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;

/**
 * Page Model
 */
class Page extends Model
{
    use GeneratesUuid;

    protected $fillable = ['parent_id', 'name', 'slug', 'template', 'status'];
    
    protected $cast = [
        'status' => 'boolean',
        'parent_id' => 'integer',
        'uuid' => 'uuid'
    ];
    /**
    * Get the route key for the model.
    *
    * @return string
    */
    public function getRouteKeyName()
    {
        return 'slug';
    }

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
    /**
     * Get the selected pages content
     *
     * @return App\PageContent
     */
    public function content()
    {
        return $this->hasOne(PageContent::class)->whereStatus(true);
    }
    /**
     * Get the selected pages metadata
     *
     * @return App\Metadata
     */
    public function metadata()
    {
        return $this->morphOne(Metadata::class, 'metadatable');
    }
}
