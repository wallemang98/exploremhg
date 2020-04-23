@extends('layouts.small_head_app')
@section('content')

<div class="content-container">
    <div class="container">

        <a href="/home" class="btn btn-default">Go Back</a>
        <h1>Edit Photo</h1>

        {!! Form::open(['action' =>
        ['PhotosController@update', $photo->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $photo->title , ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('desc', 'Description')}}
                {{Form::textarea('desc', $photo->desc, ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            <div class="form-group">
                {{Form::label('album_id', 'Album ID')}}
                {{Form::number('album_id', $photo->album_id, ['class' => 'form-control', 'placeholder' => 'Album ID'])}}
            </div>
            <div class="form-group">
                {{Form::label('location', 'Location')}}
                {{Form::text('location', $photo->location, ['class' => 'form-control', 'placeholder' => 'location /exmp/photo.jpg'])}}
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
