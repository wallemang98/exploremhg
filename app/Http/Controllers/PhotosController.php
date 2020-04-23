<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Photo::all();
        $photos = Photo::all();
        return view('photos.index')->with('photos', $photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
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
            'album_id' => 'required',
            /*'location' => 'required'*/
            'image' => 'image|nullable|max:25000',
        ]);
        
        //handle file upload
        if($request->hasFile('image')) {
            // Get filename with the extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get filename without extension
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->GetClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //upload image 
            $path = $request->file('image')->storeas('public/images', $fileNameToStore);
        } else {
            
        }
        
        //create Photo
        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->location = $fileNameToStore;
        $photo->title = $request->input('title');
        $photo->desc = $request->input('desc');
        $photo->save();
        
        return redirect('/home')->with('success', 'Photo added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);
        return view('photos.show')->with('photo', $photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);
        return view('photos.edit')->with('photo', $photo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'album_id' => 'required',
            //'location' => 'required',
        ]);
        
    
        //create Photo
        $photo = Photo::find($id);
        $photo->album_id = $request->input('album_id');
        $photo->location = $request->input('location');
        $photo->title = $request->input('title');
        $photo->desc = $request->input('desc');
        $photo->save();
        
        return redirect('/home')->with('success', 'Photo Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        
        return redirect('/home')->with('success', 'Photo Removed');
    }
}
