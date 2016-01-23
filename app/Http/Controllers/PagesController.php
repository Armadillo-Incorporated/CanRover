<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
        $gallery_photos = \DB::table('gallery_photos')->select('photo_filename', 'photo_caption')->get();

        return view('pages.home', ['gallery_photos' => $gallery_photos]);
    }

    public function news() {
        return view('pages.news');
    }

    public function report() {
        return view('pages.report');
    }

    public function gallery() {
        return view('pages.gallery');
    }
}
