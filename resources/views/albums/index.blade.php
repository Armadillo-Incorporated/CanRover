@extends('app')

@section('title')
    Gallery
@stop

@section('content')
<div class="title">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">Gallery</h1>
    </div>
</div>
<div class="row align-middle" style="padding: 30px 0px;">
    <div class="small-12 medium-10 small-centered columns">
    @foreach ($albums as $album)
        <div class="album">
            <div class="album__name">
                <h4 class="subheader" style="font-family: 'Roboto', sans-serif;">
                    {{ $album->name }} 
                </h4>
            </div>
            <hr>
            <div class="album__photos-container">
                <div class="row align-middle">
                <h8 class="small-12 columns subheader" style="font-family: 'Roboto', sans-serif; padding: 2px 25px;">
                    PHOTOS
                </h8>
                <div class="small-12 small-up-2 medium-up-3 large-up-4">
                    @foreach ($album->photos->take($photos_to_show) as $photo)
                        <a href="{{ url($photo->photo) }}" class="album__photo-link column" style="margin: 10px 0px">
                            <img src="{{ url($photo->thumbnail_path) }}" class="album__photo thumbnail" style="box-shadow: 0px 3px 3px rgba(0,0,0,0.3)" alt="">
                        </a>
                    @endforeach
                </div>
                @if ($album->photos->count() > $photos_to_show)
                    <div class="small-12 columns" style="margin: 20px 0px"><a href="/album/{{ $album->slug }}">View more</a>
                    </div>
                @else
                    <div class="small-12 columns" style="margin: 20px 0px"><a href="/album/{{ $album->slug }}">Open album</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>    
</div>
<div class="row align-middle" style="margin: 20px">
    <div class="small-12 medium-10 small-centered columns text-center">
        {!! $albums->render() !!}
    </div>
</div>
@stop

@section('scripts.footer')
    <script>
        $(document).ready(function() {
            $('a[href="/album"]').addClass('active');
        });
    </script>
@stop