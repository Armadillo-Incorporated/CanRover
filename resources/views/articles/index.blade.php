@extends('app')

@section('title')
    News
@stop

@section('content')
<div class="title">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">News</h1>
    </div>
</div>

@foreach ($articles as $article)
<div class="row align-middle article-container">
    <div class="small-12 medium-10 small-centered columns">
        <section class="news">
            <h4 class="subheader"> 
                {{ $article->title }}
                <hr>
            </h4>
            <p>
              {{ mb_strimwidth($article->body, 0, 600, "…") }}
            </p>
            <a href="/articles/{{ $article->slug }}">Open article</a>
      </section>
    </div>
  </div>
@endforeach
<div class="row align-middle" style="margin: 20px">
    <div class="small-12 medium-10 small-centered columns text-center">
        {!! $articles->render() !!}
    </div>
</div>
@stop

@section('scripts.footer')
    <script>
        $(document).ready(function() {
            $('a[href="/articles"]').addClass('active');
        });
    </script>
@stop