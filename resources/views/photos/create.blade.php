@extends('layouts.small_head_app')
@section('content')

<div class="content-container">
    <div class="container">
        <h1>Create a Photo</h1>

        {!! Form::open(['action' =>
        'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('desc', 'Description')}}
                {{Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            <div class="form-group">
                {{Form::label('album_id', 'Album ID')}}
                {{Form::number('album_id', '', ['class' => 'form-control', 'placeholder' => 'Album ID'])}}
            </div>
            <div class="form-group">
                {{Form::label('location', 'Location')}}
                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'location /exmp/photo.jpg'])}}
            </div>

            <div class="form-group">
                {{ form::file('image') }}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
        <br>
        <br>
        <br>
    </div>
</div>
@endsection
