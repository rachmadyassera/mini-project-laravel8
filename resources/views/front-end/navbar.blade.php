<nav class="navbar navbar-expand-sm bg-primary">
    <a class="navbar-brand" href="{{ url('/') }}">Sepatu Monza</a>
    <div class="nav-collapse">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="{{ url('/catalog')}}" class="nav-link">
                Product
            </a>
        </li>
        <li class="nav-item active">
            <a href="{{ url('/about')}}" class="nav-link">
                About
            </a>
        </li>
        </ul>
    </div>
      <form class="form-inline ml-auto">
      </form>
      <ul class="navbar-nav navbar-right">
      <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
      <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
      </ul>
  </nav>
