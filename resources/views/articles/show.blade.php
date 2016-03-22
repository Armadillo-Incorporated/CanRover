@extends('app')

@section('title')
    {{ $article->title }}
@stop

@section('content')
<div class="row align-middle" style="padding: 60px 0px;">
    <div class="small-12 medium-10 small-centered columns">
        <div class="album">
            <div class="album__name">
                <h4 class="subheader" style="font-family: 'Roboto', sans-serif;">
                    <a href="{{ url('/articles') }}" style="padding: 0px 20px;"><i class="fa fa-arrow-left"></i></a>    
                    {{ $article->title }}
                </h4>
            </div>            
        </div>
    </div>
    <div class="small-12 medium-10 small-centered columns">
        <section>
            <p> {{ $article->body }} </p>
        </section>
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