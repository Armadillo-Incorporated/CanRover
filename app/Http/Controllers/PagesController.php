<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
        $first = 'Joe';
        $last = 'Sandman';
        return view('pages.home', compact('first', 'last'));
    }
}
