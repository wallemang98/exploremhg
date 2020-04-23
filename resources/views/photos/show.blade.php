@extends('layouts.small_head_app')
@section('content')

<div class="content-container">
    <div class="container">
        <a class="btn btn-secondary" href="/home">Go Back</a>
        <h4>{{ $photo->title }}</h4>

        <p>{{ $photo->desc }}</p>
        <p>Location: {{ $photo->location }}</p>
        <p>Photo_id {{ $photo->id }}</p>
        <p>Album_id {{ $photo->album_id}}</p>
        <p>Created at {{ $photo->created_at }}</p>
        <p>Updated at {{ $photo->updated_at }}</p>

        <a href="/photos/{{$photo->id}}/edit" class="btn btn-warning">Edit</a>

        {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}

        <img src="/storage/images/{{$photo->location}}" class="img-thumbnail">
    </div>
</div>
@endsection
