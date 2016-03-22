<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

use CanRover\Photo;
use CanRover\Article;

class PagesController extends Controller
{
    public function home() {
        $photos = Photo::recent();
        $article = Article::recent();

        return view('pages.home', compact('photos', 'article'));
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
