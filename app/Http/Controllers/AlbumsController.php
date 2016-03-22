<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use CanRover\Http\Requests\AlbumRequest;
use CanRover\Http\Controllers\Controller;

use Carbon\Carbon;

use CanRover\Album;
use CanRover\Photo;

class AlbumsController extends Controller
{
    /**
     * Show all the available albums
     *
     * @return Response
     */
    public function index() {
        $albums = Album::with('photos')->has('photos')->orderBy('created_at')->paginate(5);

        $photos_to_show = 8;

        return view('albums.index', compact('albums', 'photos_to_show'));
    }

    /**
     * Show the form to create a new album
     *
     * @return Response
     */
    public function create() {
        return view('mod.albums.create');
    }

    /**
     * Handle the creation of a new album
     *
     * @param  AlbumRequest $request
     * @return void
     */
    public function store(AlbumRequest $request) {
        $slug = str_slug($request->name);
        $request->merge(array('slug' => $slug));
        
        Album::create($request->all());

        flash()->success('Success!', 'Your album has been created');

        return redirect(sprintf('/album/%s/upload', $slug));
    }

    /**
     * Show form to upload photos to a certain album
     *
     * @param  string $slug
     * @return Response
     */
    public function upload($slug) {
        $album = Album::WithSlug($slug);

        $photos = \DB::table('photables')
            ->join('photos', 'photables.photo_id', '=', 'photos.id')
            ->join('albums', 'photables.photable_id', '=', 'albums.id')
            ->where('albums.name', '<>', $album->name)
            ->get();

        return view('mod.albums.upload', compact('album', 'photos'));
    }

    /**
     * Apply photos to the referenced album
     *
     * @param Request $request
     */
    public function addPhotos(Request $request, $album) {
        $this->validate($request, [
            'file' => 'required|image',
        ]); 

        $photo = $this->makePhoto($request->file('file'));

        Album::WithSlug($album)->addPhoto($photo);
    }

    protected function makePhoto(UploadedFile $file) {
        return Photo::named($file->getClientOriginalName())->move($file);
    }

    public function show($slug) {
        $album = Album::WithSlug($slug);

        return view('albums.show')->withAlbum($album);
    }

    public function edit($slug) {
        $album = Album::WithSlug($slug);
        $time = Carbon::now();

        return view('mod.albums.edit', compact('album', 'time'));
    }

    public function update($slug, AlbumRequest $request) {
        $album = Album::WithSlug($slug);

        $album->updated_at = Carbon::now();

        $album->update($request->all());

        return redirect(url('/dashboard'));
    }

    // public function destroy($slug) {

    // }
}
