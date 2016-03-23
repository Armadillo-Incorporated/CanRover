@extends('app')

@section('title')
    {{ $album->name }}
@stop

@section('content')
<div class="row align-middle" style="padding: 60px 0px;">
    <div class="small-12 medium-10 small-centered columns">
        <div class="album">
            <div class="album__name">
                <h4 class="subheader" style="font-family: 'Roboto', sans-serif;">
                    <a href="{{ url('album') }}" style="padding: 0px 20px;"><i class="fa fa-arrow-left"></i></a>
                    {{ $album->name }}
                </h4>
            </div>
            <hr>
            <div class="album__photos-container">
                @if (!Auth::guest())
                    <div class="row">
                        <div class="small-11 medium-centered">
                            <a href="{{ url(sprintf('album/%s/upload', $album->slug)) }}" class="button button-primary expanded">Upload Photos</a>
                        </div>
                    </div>
                @endif
                <div class="row align-middle">
                <h8 class="small-12 columns subheader" style="font-family: 'Roboto', sans-serif; padding: 2px 25px;">
                    PHOTOS
                </h8>
                <div class="small-12 small-up-2 medium-up-3 large-up-4">
                    @foreach ($album->photos as $photo)
                        <a href="{{ url($photo->photo) }}" class="album__photo-link column">
                            <img src="{{ url($photo->thumbnail_path) }}" class="album__photo" alt="">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
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