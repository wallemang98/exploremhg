@extends('layouts.small_head_app')
@section('content')
<div class="small-content-container">
  <div style="">
    <a href="/featured" class="btn btn-default">Go Back</a>
    <h1>Photos</h1>

    @include('inc.photo_layout')

    <br>
    <br>
    <br>
    
  </div>
</div>
@endsection
