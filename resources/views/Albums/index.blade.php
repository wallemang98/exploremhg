@extends('layouts.small_head_app')
@section('content')
<div class="content-container">
    <div class="container">
        <p>Album page</p>

        @if(count($albums) > 0)
            <table class="table table-striped">
                <tr>
                    <th>Album ID</th>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($albums as $album)
                    <tr>
                        <td>{{ $album->id}}</td>
                        <td>{{ $album->title }}</td>
                        <td><a class="btn btn-warning" href="/albums/{{ $album->id }}">View</a> </td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        @else
            <div>
            <p>We have no albums right now!</p>
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
