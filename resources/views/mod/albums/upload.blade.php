@extends('app')

@section('title')
    Upload to {{ $album->name }}
@stop

@section('content')
    <div class="title">
        <div class="small-12 medium-10 small-centered medium-centered columns">
            <h1 class="text-center">Upload to {{ $album->name }}</h1>
        </div>
    </div>
    <div class="row align-middle">
        <div class="small-12 medium-10 small-centered columns">
            <section>
                <form id="uploadPhotosForm" method="POST" action="/album/{{ $album->slug }}/photos" enctype="multipart/form-data" class="dropzone" style="width: 100%; border: none;">
                    {!! csrf_field() !!}
                </form>
            </section>
        </div>
    </div>
    {{-- @if (!empty($photos))} 
    <div class="photos-container">
        <div class="row align-middle">
            <div class="small-12 medium-10 small-centered columns">
                <h8 class="small-12 columns subheader" style="font-family: 'Roboto', sans-serif; padding: 2px 25px;">
                    ADD EXISTING PHOTOS 
                </h8>
                <div class="small-12 small-up-1 medium-up-3 large-up-4">
                    @foreach ($photos as $photo)
                        <a href="{{ url($photo->photo) }}" class="album__photo-link column" style="margin: 10px 0px">
                            <img src="{{ url($photo->thumbnail_path) }}" class="album__photo thumbnail" alt="">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif--}}
@stop