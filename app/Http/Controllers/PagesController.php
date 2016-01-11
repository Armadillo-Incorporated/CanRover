<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function news() {
        return view('pages.news');
    }
}
