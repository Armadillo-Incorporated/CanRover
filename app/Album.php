<?php

namespace CanRover;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {
    /**
     * Parameters that are Mass Assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_at',
        'updated_at',
    ];

    /**
     * An album is composed of many photos
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function photos() {
        return $this->morphToMany('CanRover\Photo', 'photable');
    }

    /**
     * Persists photo to database
     * 
     * @param string $name 
     */
    public function addPhoto(Photo $photo) {
        return $this->photos()->save($photo);
    }

    /**
     * Search for album with referenced slug
     * 
     * @param  string $slug 
     * @return \CanRover\Album       
     */
    public static function withSlug($slug) {
        return static::where('slug', $slug)->with('photos')->firstOrFail();
    }
}
