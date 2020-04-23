<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO tags -->
    <title>Michael Garrett Photography</title>
    <meta name="description" content="Michael Garrett Photography. Special occasions, partys, buisness events, nature and wildlife, anything you need lasting impressions of, Michael Garrett Photography has the print you need!">
    <meta name="keywords" content="Photography, Michael Garrett, Michael Garrett Photography, micheal Garrett, micheal Garrett Photography, Garrett, self-portrait, portrait, nature, wildlife, nature print, wildlife print, wild life print, wildlife photo, photograph, image, Photographer">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Retrieving app name from laravel config -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Cabin:500|Dosis|Source+Sans+Pro&display=swap" rel="stylesheet">

     <!-- MHG fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed|Titillium+Web&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- bootstrap styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div id="smallSlideshow" class="slide1">
        @include('inc.navbar')
        @include('inc.messages')
        @include('inc.small_heading')
    </div>

    <div class="container-fluid">
        @yield('content')
   </div>

    <!-- footer -->
    <footer>
            <p> Allemang Designs &copy; 2019 - @php echo date("Y"); @endphp </p>
    </footer>

    </body>
    <!-- Jquery 3.4.1
        The integrity and crossorigin attributes are used for Subresource Integrity (SRI) checking. This allows browsers to ensure that resources hosted on third-party servers have not been tampered with. Use of SRI is recommended as a best-practice, whenever libraries are loaded from a third-party source.
    -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Scripts --> <!-- defer????*** -->
<script src="{{ asset('js/all.js') }}" defer></script>
<!--<script src=" asset('js/slideshow.js') }}" defer></script> -->
</html>
