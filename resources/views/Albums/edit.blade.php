@extends('layouts.small_head_app')

@section('content')

<div class="content-container">
    <div class="container">

        <a href="/home" class="btn btn-default">Go Back</a>
        <h1>Edit Album</h1>

        {!! Form::open(['action' =>
        ['AlbumController@update', $album->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $album->title , ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('desc', 'Description')}}
                {{Form::textarea('desc', $album->desc, ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            <div class="form-group">
                {{Form::label('album_id', 'Album id')}}
                {{Form::number('album_id', $album->id, ['class' => 'form-control', 'placeholder' => 'Album id'])}}
            </div>

            <!-- spoofing PUT request -->
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Update', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
        <br>
        <br>
        <br>
    </div>
</div>
@endsection
