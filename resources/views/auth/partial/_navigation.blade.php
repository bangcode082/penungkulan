<div class="col-sm-3 sidenav">

  <h4>Dashboard<span> <a href="{{ url('/') }}" class="btn btn-sm btn-warning">Kembali Ke web</a></span></h4>
  <ul class="nav nav-pills nav-stacked">
    <li class="@yield('menu1')"><a href="{{ route('product.index') }}">Produk</a></li>
    <li class="@yield('menu2')"><a href="{{ route('category-product.index') }}">Kategori</a></li>
    <li class="@yield('menu3')"><a href="{{ url('banner-product') }}">Banner</a></li>
    <li class="@yield('menu4')"><a href="{{ url('contact-product') }}">Kontak</a></li>
    <li class="@yield('menu5')"><a href="{{ url('askandanswer-product') }}">Tanya Jawab</a></li>
    <li class="@yield('menu6')"><a href="{{ url('change-password') }}">Profile</a></li>
    {{-- menu logout --}}
    <li>
      <a href="{{ url('/logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      Logout
    </a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
  </li>

</ul><br>

</div>