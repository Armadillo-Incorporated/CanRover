@extends('app')

@section('title')
    Moderator Dashboard
@stop

@section('content')
    <div class="title">
        <div class="small-12 medium-10 medium-centered columns">
            <h1 class="text-center">Moderator Dashboard</h1>
        </div>
    </div>
        <div class="row">
            <div class="small-12 medium-8 medium-centered">
                <table class="hover scroll album-list">
                        <tr>
                            <th scope="column">Album</th>
                            <th scope="column">Created On</th>
                            <th scope="column">Updated On</th>
                            <th scope="column"><i class="fa fa-pencil-square-o"></i></th>
                            <th scope="column"><i class="fa fa-upload"></i></th>
                            <th scope="column"><i class="fa fa-trash"></i></th>
                        </tr>
                        @foreach ($albums as $album)
                            <tr>
                                <td><a href="{{ url(sprintf('album/%s', $album->slug)) }}">{{ $album->name }}</a></td>
                                <td>{{ $album->created_at }}</td>
                                <td>{{ $album->updated_at }}</td>
                                <td><a href="{{ url('album' . '/' . $album->slug . '/edit') }}" class="button button-primary expanded">Edit</a></td>
                                <td>
                                    <a href="{{ url('album' . '/' . $album->slug . '/upload') }}" class="button button-primary expanded">Upload</a>
                                </td>
                                <td><a href="{{ url('album/' . $album->slug) }}" class="button button-primary expanded">Delete</a></td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    <div class="row">
        <div class="small-12 medium-8 medium-centered">
            <a href="{{ url('album/create') }}" class="button button-primary expanded">Create a new album</a>
        </div>
    </div>

    <div class="row">
            <div class="small-12 medium-8 medium-centered">
                <table class="hover scroll album-list">
                        <tr>
                            <th scope="column">Article</th>
                            <th scope="column">Created On</th>
                            <th scope="column">Updated On</th>
                            <th scope="column"><i class="fa fa-pencil-square-o"></i></th>
                            <th scope="column"><i class="fa fa-trash"></i></th>
                        </tr>
                        @foreach ($articles as $article)
                            <tr>
                                <td><a href="{{ url(sprintf('articles/%s', $article->slug)) }}">{{ $article->title }}</a></td>
                                <td>{{ $article->created_at }}</td>
                                <td>{{ $article->updated_at }}</td>
                                <td><a href="{{ url('articles' . '/' . $article->slug . '/edit') }}" class="button button-primary expanded">Edit</a></td>
                                <td><a href="{{ url('articles/' . $article->slug) }}" class="button button-primary expanded">Delete</a></td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    <div class="row">
        <div class="small-12 medium-8 medium-centered">
            <a href="{{ url('articles/create') }}" class="button button-primary expanded">Create a new article</a>
        </div>
    </div>
@stop