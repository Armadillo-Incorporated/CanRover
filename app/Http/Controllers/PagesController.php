<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
        // $gallery_photos = \DB::table('gallery_photos')->select('photo_filename', 'photo_caption')->get();
        // $gallery_categories = \DB::table('gallery_category')->select('category_name')->get();

        return view('pages.home');
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
