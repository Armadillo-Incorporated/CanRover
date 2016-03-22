<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

use CanRover\Photo;
use CanRover\Album;

class PhotosController extends Controller
{
    public function show($album, $photo) {


        return view('albums.photos.show');
    }
}
