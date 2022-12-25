<nav class="navbar navbar-expand-lg main-navbar">
    <a href="{{ url('/') }}" class="navbar-brand sidebar-gone-hide">Sepatu Monza </a>
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    <div class="nav-collapse">
      <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
        <i class="fas fa-ellipsis-v"></i>
      </a>
      <ul class="navbar-nav"> 
        <li class="nav-item active">
          <a href="{{ url('/product')}}" class="nav-link">
              Product
          </a>
      </li>
      <li class="nav-item">
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
<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container text-center">
        <marquee direction="right" scrollamount="6">
        <center><b>Sepatu UMKM Produk Lokal, Kualitas Internasional. Cintai Produk-Produk Indonesia</b></center>

        </marquee>
    </div>
</nav>
