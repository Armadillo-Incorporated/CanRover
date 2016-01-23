<?php

namespace CanRover;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name',
        'description',
        'cover_image',
        'created_at',
        'updated_at'
    ];
}
