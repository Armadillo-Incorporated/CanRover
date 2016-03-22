<?php

namespace CanRover;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Parameters that are Mass Assignable
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
        'created_at',
        'updated_at',
    ];

    /**
     * Query Scope to get the most recent article 
     * 
     * @param $query 
     * @return \CanRover\Photo 
     */
    public function scopeRecent($query) {
        return $query->orderBy('created_at')->first();
    }

    /**
     * Search for article with referenced slug
     * 
     * @param  string $slug 
     * @return \CanRover\Article       
     */
    public static function withSlug($slug) {
        return static::where('slug', $slug)->firstOrFail();
    }
}
