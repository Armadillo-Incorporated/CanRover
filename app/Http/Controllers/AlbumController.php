<?php

namespace CanRover\Http\Controllers;

use CanRover\Album;
use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function index() {
        $albums = Album::all();

        return view('gallery.albums', compact('albums'));
    }
}
