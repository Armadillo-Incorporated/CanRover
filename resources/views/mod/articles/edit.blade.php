@extends('app')

@section('title')
   Edit {{ $article->title }}
@stop

@section('content')
    <div class="title">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">Edit {{ $article->title }}</h1>
    </div>
</div>
<div class="row align-middle" style="padding: 60px 0px;">
    <div class="small-12 medium-10 small-centered columns">
        <section>
        {!! Form::model( $article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->slug]]) !!}
            @include('mod.articles.form', ['submitButtonText' => 'Update Article'])
        {!! Form::close() !!}
        </section>
    </div>
</div>
@stop