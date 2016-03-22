@extends('app')

@section('title')
    Create Album
@stop

@section('content')
<div class="title">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">Create Album</h1>
    </div>
</div>
<div class="row align-middle">
    <div class="small-12 medium-10 small-centered columns">
        <section>
            {!! Form::open(['method' => 'POST', 'action' => 'AlbumsController@store']) !!}
              @include('mod.albums.form', ['submitButtonText' => 'Create Album'])    
            {!! Form::close() !!}
        </section>
    </div>
</div>
@stop