@extends('app')

@section('content')
    <div class="title">
      <div class="small-12 medium-10 small-centered medium-centered columns">
          <h1 class="text-center">Gallery</h1>
      </div>
    </div>

    <div class="row align-middle">
        <div class="small-12 medium-10 small-centered medium-centered columns">
            <section>
                <ul class="tabs" data-tabs id="gallery-tabs">
                  <li class="tabs-title is-active"><a href="#images-tab" aria-selected="true">Images</a></li>
                  <li class="tabs-title"><a href="#videos-tab">Videos</a></li>
                </ul>

                <div class="tabs-content" data-tabs-content="gallery-tabs">
                  <div class="tabs-panel is-active" id="images-tab">
                      @foreach ($albums as $album)
                        <h3>{{  $album->name  }}</h3>
                      @endforeach
                  </div>
                  <div class="tabs-panel" id="videos-tab">
                    <p>hey</p>
                  </div>
                </div>
            </section>
        </div>
    </div>
@stop
