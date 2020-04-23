@extends('layouts.small_head_app')
@section('content')

<div class="content-container">
    <div class="container">
        <a class="btn btn-secondary" href="/home">Go Back</a>
        <h4>{{ $album->title }}</h4>

        <p>{{ $album->desc }}</p>
        <p>Album id {{ $album->id }}</p>
        <p>Created at {{ $album->created_at }}</p>
        <p>Updated at {{ $album->updated_at }}</p>

        <a href="/albums/{{$album->album_id}}/edit" class="btn btn-warning">Edit</a>

        {!! Form::open(['action' => ['AlbumController@destroy', $album->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection
