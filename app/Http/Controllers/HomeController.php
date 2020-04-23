<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Album;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $photos = Photo::all();
        $albums = Album::all();
        $users = User::all();
        return view('home')->with(
            array(
                'photos' => $photos,
                'albums' => $albums,
                'users' => $users,
            ));
    }
}
