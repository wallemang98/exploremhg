<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('Albums.index')->with('albums', $albums);
    }
    
    /**
    * Show relationship object photos that are owned
    * By the Album model
    *
    * @return App\photo
    */
    public function photos($id)
    {
        $album = Album::find($id);
         return view('Albums.photos')->with('photos', $album->photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
        ]);
        
        //create Album
        $album = new Album;
        $album->title = $request->input('title');
        $album->desc = $request->input('desc');
        $album->save();
        
        return redirect('/home')->with('success', 'Album Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find($id);
        return view('albums.show')->with('album', $album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('albums.edit')->with('album', $album);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
        ]);
        
        //create Album
        $album =  Album::find($id);
        $album->title = $request->input('title');
        $album->desc = $request->input('desc');
        $album->id = $request->input('album_id');
        $album->save();
        
        return redirect('/home')->with('success', 'Album Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        
        return redirect('/home')->with('success', 'Album Removed');
    }
}
