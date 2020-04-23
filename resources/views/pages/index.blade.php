@extends('layouts.app')

@section('content')

<div class="content-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <center>
                <h1>Hey there, I'm Michael, a nature and profile photographer based out of Louisville, Kentucky.</h1>
                <h3>I've been capturing my adventures for the past 2 years -- it's my passion. A few of my favorite things
                  include: portrait shoots, rock-climbing, hiking, and anything that can get my feet dirty.</h3>
                </center>
            </div>
        </div> <!-- closing row -->

        <br>
        <br>
        <div class="row">
            <div class="col-md-5 col-lg-6">
              <center>
                  <p class="content-header">Nature.</p>
              </center>
                  <p class="content-body">
                    My favorite pastime is being out in nature. I especially enjoy being able to share that
                    with people through photos. Sometimes it is the simplest thing in nature that captures my eye.
                    Whether it is in my backyard, another state, or country, I'm always excited to explore and capture
                    the memories that I make there.
                  </p>

                  <a href="/featured/"><button id="target" type="button" class="btn btn-primary btn-block">View Featured Work</button></a>

                  <div class="bear photo grey-bg box-shadow"></div>
            </div><!-- closing left-hand col -->

            <div class="col-md-7 col-lg-6">
              <div class="elcap photo grey-bg box-shadow"></div>

              <div class="mountainLake photo grey-bg box-shadow"></div>
            </div><!-- closing right hand col -->
        </div><!-- closing top row -->

        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-md-5 col-lg-6">
            <center>
                <p class="content-header">Portraits.</p>
            </center>

            <p class="content-body">
              The most important thing to me in portraits, is capturing the raw emotion in
              peoples faces. Being able to work with unique individuals, allows me to tell
              a story through the photos. In portraits, not only am I able to hone my skills
              with an individual, but also group sessions like Bellarmine's TedTalk.
            </p>

            <a href="/featured/"><button id="target" type="button" class="btn btn-primary btn-block">View Featured Work</button></a>

            <div class="christina photo grey-bg box-shadow"></div>

            </div><!-- closing left-hand col -->

            <div class="col-md-7 col-lg-6">
                <div class="girlField photo grey-bg box-shadow"></div>

                <div class="bAndW photo grey-bg box-shadow"></div>
                <br>
            </div><!-- closing right hand col -->
           @include('inc.bottom')

           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
        </div><!-- closing bottom row -->
    </div> <!-- closing container -->
</div> <!-- closing content-container -->

@endsection
