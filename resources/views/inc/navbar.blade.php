<nav class="navbar sticky-top navbar-expand-lg text-white nav-bg navbar-dark">
    <a class="text-white" href="{{ url('/') }}">Michael Garrett Photography </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
      <!-- <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span> -->
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- my pages -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link nav-text text-white" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-text text-white" href="/featured">Featured Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-text text-white" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a href="http://www.instagram.com/explore.mhg" target="_blank"><img src="../img/insta.png" width="38px" height="35px" /></a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link nav-text text-white" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-text text-white" href="/contact">Contact</a>
          </li> -->
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest

            @else
              <!--  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/home">Dashboard</a>
                        <a class="dropdown-item" href="/photos/create">Create Photo</a>
                        <a class="dropdown-item" href="/albums/create">Create Album</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li> -->
            @endguest
        </ul>
    </div>
</nav>
