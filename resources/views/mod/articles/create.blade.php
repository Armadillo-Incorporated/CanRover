@extends('app')

@section('title')
    Create Article
@stop

@section('content')
<div class="title">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">Create Article</h1>
    </div>
</div>
<div class="row align-middle">
    <div class="small-12 medium-10 small-centered columns">
        <section>
            {!! Form::open(['method' => 'POST', 'action' => 'ArticlesController@store']) !!}
              @include('mod.articles.form', ['submitButtonText' => 'Create Article'])    
            {!! Form::close() !!}
        </section>
    </div>
</div>
@stop