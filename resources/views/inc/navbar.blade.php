<header id="site-header">
    <div class="container">
      <nav id="main-nav">
        <a href="{{ url('/') }}"><img src="{{URL::asset('/image/logo.png')}}" alt="PetsHotSpot Website" id="logo" /></a>
        <ul>
          <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
          <li>
            <a href="/posts">Dogs</a>
            <ul class="sub-menu">
              <li><a href="#">Dogs breeds</a></li>
              <li><a href="#">Nutrition & Food</a></li>
              <li><a href="#">Dogs breeds</a></li>
            </ul>
          </li>
          @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
              <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="sub-menu">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                  </ul>
              </li>
          @endif
        </ul>
      </nav>
    </div>
  </header>