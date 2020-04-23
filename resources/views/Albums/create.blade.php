@extends('layouts.small_head_app')

@section('content')

<div class="content-container">
    <div class="container">
        <h1>Create a Album</h1>

        {!! Form::open(['action' =>
        'AlbumController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('desc', 'Description')}}
                {{Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>

            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
        <br>
        <br>
        <br>
    </div>
</div>
@endsection
