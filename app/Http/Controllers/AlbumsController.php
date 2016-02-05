<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests;
use CanRover\Http\Controllers\Controller;

class AlbumsController extends Controller
{
    public function index() {
        return view('albums.index');
    }

    public function create() {
        return view('albums.create');
    }

    // public function store(Request $request) {

    // }

    // public function show($album) {

    // }

    // public function update($album) {

    // }

    // public function destroy($album) {

    // }

    // public function edit($album) {

    // }
}
