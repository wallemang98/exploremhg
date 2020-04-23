@extends('layouts.small_head_app')
@section('content')
<div class="content-container">
    <div class="container">
        <p>Photo page</p>

        @if(count($photos) > 0)
            <table class="table table-striped">
                <tr>
                    <th>Photo ID</th>
                    <th>Album ID</th>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($photos as $photo)
                    <tr>
                        <td>{{ $photo->id}}</td>
                        <td>{{ $photo->album_id }}</td>
                        <td>{{ $photo->title }}</td>
                        <td><a class="btn btn-warning" href="/photos/{{ $photo->photo_id }}">View</a> </td>
                        <td>{!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!! Form::close() !!}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <div>
            <p>We have no photos right now!</p>
            </div>
        @endif
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection
