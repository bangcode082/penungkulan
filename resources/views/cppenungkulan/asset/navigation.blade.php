<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Penungkulan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('about') }}">Tentang</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('infrastruktur') }}">Infrastruktur</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('bidang') }}">Bidang Kemasyarakatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('store') }}">Produk</a>
        </li>
        @if(Auth::user())
         <li style="padding-top: 5px;">
          <a class="btn btn-primary btn-sm " href="{{ url('dashboard') }}" >Dashboard</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>