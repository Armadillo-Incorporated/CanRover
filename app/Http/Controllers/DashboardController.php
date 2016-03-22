<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

use CanRover\Album;
use CanRover\Article;

class DashboardController extends Controller
{
    public function index() {
        $albums = Album::get();
        $articles = Article::get();

        return view('mod.dashboard', compact('albums', 'articles'));
    }
}
