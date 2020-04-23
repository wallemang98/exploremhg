@extends('layouts.small_head_app')

@section('content')

<div class="small-content-container">
  <div class="row">
      <div class="col-xs-12 m-auto">
      <center>

          <h1>Contact Me!</h1>

          <ul style="list-style: none">
            <li><a href="tel:">(502)999-9999</a></li>
            <li><a href="mailto:michaelgarrett@exploremhg.com">michaelgarrett@exloremhg.com</a></li>
          </ul>

              <form method="post" action="{{ url('/send/email') }}" accept-charset="UTF-8">
                @csrf
              <fieldset>
                <legend>Feel free to fill out this form as well!</legend>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required> <br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="insta">Instagram or social media handle:</label>
                <input type="text" id="insta" name="insta" required><br>
              </fieldset>

              <fieldset>
                <legend>What kind of session or event are you planning?</legend>

                <textarea id="desc" name="desc" required>

                </textarea><br>

                <button type="submit" name="send" value="send">Submit</button>
                </fieldset>
              </form>
          </center>

          <br>
          <br>
          <br>
      </div> <!-- closing contact col -->
  </div> <!-- closing row -->
</div>
@endsection
