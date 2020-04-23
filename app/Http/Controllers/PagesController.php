<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//email
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Photo;
use App\Album;


class PagesController extends Controller
{
    /* index function loads the landing page of the site.
     * preferably with the url http://mgphotography.com/ or current domain name.
     */
    public function index() {
        return view('pages.index');
    } //closing index()

    public function featured() {

        $photos = Photo::all();
        $albums = Album::all();
        return view('pages.featured')->with(
            array(
                'photos' => $photos,
                'albums' => $albums,
            ));
    }

    public function contact() {
      return view('pages.contact');
    }

    public function sendMail(Request $request) {
      //validate form data
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'insta' => 'required',
        'desc' => 'required'
      ]);

      //putting data into the array
      $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'insta' => $request->insta,
        'desc' => $request->desc,
      );

      //using phpmailer class
      //passing
      Mail::to('michaelgarrett@exploremhg.com')->send(new SendMail($data));

      return back()->with('success', 'Thanks for contacting us!');
    }
}
