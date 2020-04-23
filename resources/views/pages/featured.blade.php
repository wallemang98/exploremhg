@extends('layouts.small_head_app')

@section('content')

<div class="small-content-container">
  <div>
      <a class="btn btn-default" href="/">Go Back</a>
      <h1>Albums</h1>
      @include('inc.album_layout')
      {{--@if(count($albums) > 0)
          @foreach($albums as $album)
              <h4><a href="/albums/{{$album->id}}/photos">Album {{ $album->title }}</a></h4>
          @endforeach

          {{ $albums->links() }}
      @endif                     --}}
      <br>
      <br>
      <br>
  </div>
</div>
@endsection
