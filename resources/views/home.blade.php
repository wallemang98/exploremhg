@extends('layouts.small_head_app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{ Auth::user()->name }}!
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        Logout
                    </a>    
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div> <!-- closing log card -->

            @if( Auth::user()->group == 8)
              <div class="card">
                  <div class="card-header">Photos</div>
                      <div class="card-body">
                      @if(count($photos) > 0)
                          <table class="table table-striped">
                              <tr>
                                  <th>Photo ID</th>
                                  <th>Album ID</th>
                                  <th>Title</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              @foreach($photos as $photo)
                                  <tr>
                                      <td>{{ $photo->id}}</td>
                                      <td>{{ $photo->album_id }}</td>
                                      <td>{{ $photo->title }}</td>
                                      <td><a class="btn btn-warning" href="/photos/{{ $photo->id }}">View</a> </td>
                                      <td><a class="btn btn-default" href="photos/{{$photo->id}}/edit">Edit</a></td>
                                      <td>{!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                              {{Form::hidden('_method', 'DELETE')}}
                                              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                          {!! Form::close() !!}</td>
                                  </tr>
                              @endforeach
                          </table>

                          <a class="btn btn-primary" href="/photos/create">Create Photo</a>
                      @else
                          <div>
                          <p>We have no photos right now!</p>
                          <a class="btn btn-primary" href="/photos/create">Create Photo</a>
                          </div>
                      @endif
                  </div>
              </div><!-- closing photo card -->

              <div class="card">
                  <div class="card-header">Albums</div>
                      <div class="card-body">
                      @if(count($albums) > 0)
                          <table class="table table-striped">
                              <tr>
                                  <th>Album ID</th>
                                  <th>Title</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              @foreach($albums as $album)
                                  <tr>
                                      <td>{{ $album->id }}</td>
                                      <td>{{ $album->title }}</td>
                                      <td><a class="btn btn-warning" href="/albums/{{ $album->id }}">View</a> </td>
                                      <td><a class="btn btn-default" href="albums/{{$album->id}}/edit">Edit</a></td>
                                      <td>{!! Form::open(['action' => ['AlbumController@destroy', $album->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                              {{Form::hidden('_method', 'DELETE')}}
                                              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                          {!! Form::close() !!}</td>
                                  </tr>
                              @endforeach
                          </table>

                          <a class="btn btn-primary" href="/albums/create">Create Album</a>
                      @else
                          <div>
                          <p>We have no Albums right now!</p>
                          <a class="btn btn-primary" href="/albums/create">Create Album</a>
                          </div>
                      @endif
                  </div>
              </div><!-- closing album card -->

              <!-- users card -->
              <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        @if(count($users) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Group</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($users as $user)
                                 <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->group }}</td>
                                    <td><a href="/user/{{$user->id}}/edit" class="btn btn-warning">Edit</a></td>
                                    <td>{!! Form::open(['url' => ['UserController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}</td>
                                </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no users</p>
                        @endif
                    </div><!--- user card body -->
                </div> <!-- user card -->
            @else
              <center>
                Check back here for future updates!
              </center>
            @endif
        </div> <!-- closing col -->
    </div> <!-- closing row -->
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


@endsection
