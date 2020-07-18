<header id="header" class="fixed-top header-transparent">
<div class="container">

    
      <div class="logo float-left">
      <h1 class="text-light"><a href="/">PIU NEWs</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li class="drop-down"><a href="/about">Live Case</a>
            <ul>
              <li><a href="/services">Covid-19 Basics</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="/portfolio">Report</a>
            <ul>
              <li><a href="/team">Publishers</a></li>
            </ul>
          </li>
          <li><a href="/blog">Blog</a></li>
          <li ><a href="/contact">About Us</a></li>        
          @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" style="color: rgb(20, 57, 179)" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                  <a class="dropdown-item" style="color: rgb(20, 57, 179)" href="{{ route('messages.create') }}">{{ __('Review') }}</a>
                                    <a class="dropdown-item" style="color: crimson" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
        
      </nav><!-- .nav-menu -->
</div>
</header>
