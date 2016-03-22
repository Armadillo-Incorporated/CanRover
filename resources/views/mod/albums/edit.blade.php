@extends('app')

@section('title')
   Edit {{ $album->name }}
@stop

@section('content')
    <div class="title">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">Edit {{ $album->name }}</h1>
    </div>
</div>
<div class="row align-middle" style="padding: 60px 0px;">
    <div class="small-12 medium-10 small-centered columns">
        <section>
        {!! Form::model( $album, ['method' => 'PATCH', 'action' => ['AlbumsController@update', $album->slug]]) !!}
            @include('mod.albums.form', ['submitButtonText' => 'Update Album'])
        {!! Form::close() !!}
        </section>
    </div>
</div>
@stop