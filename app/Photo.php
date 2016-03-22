<?php

namespace CanRover;

Use Image;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    /**
     * Parameteres that are Mass Assignable
     * 
     * @var array
     */
    protected $fillable = [
        'id',
        'description',
        'photo',
        'thumbnail_path',
        'name',
        'created_at',
    ];

    protected $baseDir = 'albums/photos';

    /**
     * A photo may be contained in many albums
     * 
     * @return void
     */
    public function albums() {
        return $this->morphedByMany('CanRover\Album', 'photable');
    }

    /**
     * Query Scope to get recent photos 
     * 
     * @param $query 
     * @return \CanRover\Photo 
     */
    public function scopeRecent($query) {
        return $query->orderBy('created_at')->take(4)->get();
    }

    /**
     * Upload file to albums/photos directory
     * 
     * @param  string $name 
     * @return \CanRover\Photo             
     */
    public static function named($name) {
        return (new static)->saveAs($name);
    }

    protected function saveAs($name) {
        $this->name = sprintf('%s-%s', time(), $name);
        $this->photo = sprintf('%s/%s', $this->baseDir, $this->name);
        $this->thumbnail_path = sprintf('%s/tn-%s', $this->baseDir, $this->name);

        return $this;
    }

    /**
     * Move file to albums/photos
     * 
     * @param  UploadedFile $file 
     * @return \CanRover\Photo           
     */
    public function move(UploadedFile $file) {
        $file->move($this->baseDir, $this->name);

        $this->makeThumbnail();

        return $this;
    }

    protected function makeThumbnail() {
        Image::make($this->photo)
             ->fit(200)
             ->save($this->thumbnail_path);
    }
}
