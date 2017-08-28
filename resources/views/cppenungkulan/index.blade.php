@extends('cppenungkulan.layouts')

@section('title','Penungkulan - Home')

@section('content')
  <!-- Header -->
  <header class="intro-header">
    <div class="container">
      <div class="intro-message">
        <h1>Penungkulan</h1>
        <h3>KEC. GEBANG, KAB. PURWOREJO</h3>
        <hr class="intro-divider">
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <section class="content-section-a">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 ml-auto">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h2 class="section-heading">TOPOMINI DESA PENUNGKULAN</h2>
          <p class="lead">Dikisahkan pada zaman Kewalian yaitu Sunan Kalijogo yang mengembara menyebarkan agama Islam ditanah Jawa.
            Dalam pengembaraannya Sunan kalijogo sempat singgah di Jawa bagian tengah tepatnya dbagian utara Purworejo.<br> <a href="#">Selengkapnya ...</a>
          </p>
        </div>
        <div class="col-lg-5 mr-auto">
          <img   class="img-fluid zoom_01" src="{{asset('assetcp/img/ipad.png')}}" alt="" data-zoom-image="{{asset('assetcp/img/ipad.png')}}">
        </div>
      </div>

    </div>
    <!-- /.container -->
  </section>

  <section class="content-section-b">

    <div class="container">

      <div class="row">
        <div class="col-lg-5 mr-auto order-lg-2">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h2 class="section-heading">VISI & MISI</h2>
          <p class="lead">
            <h5>Visi</h5>
            Profesional Dalam Membina, Melayani dan Memfasilitasi Menuju Masyarakat Sejahtera<br><br>

            <h5>Misi</h5>
            <ol>
              <li>Menyelenggarakan tugas administrasi pemerintahan</li>
              <li>Menyelenggarakan tugas administrasi pembangunan</li>
              <li>Menyelenggarakan tugas administrasi kemasyarakatan</li>
              <a href="#">Selengkapnya ...</a>
            </ol>
          </p>
        </div>
        <div class="col-lg-5 ml-auto order-lg-1">
          <img  class="img-fluid zoom_01" src="{{asset('assetcp/img/dog.png')}}" alt="" data-zoom-image="{{asset('assetcp/img/dog.png')}}">
        </div>
      </div>

    </div>
    <!-- /.container -->

  </section>
  <!-- /.content-section-b -->

  <section class="content-section-a">

    <div class="container">

      <div class="row">
        <div class="col-lg-5 ml-auto">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h2 class="section-heading">Bidang kemasyarakatan  Di Desa Penungkulan</h2>
          <p class="lead">
            <ol>
              <li>Kelompok Tani Ternak</li>
              <li>Kelompok Tani</li>
              <li>Kelompok Tani Ikan</li>
              <li>Kelompok Ketrampilan </li>
              <li>Kelompok Seni Budaya</li>
              <a href="#">Selengkapnya ...</a>
            </ol>
          </p>
          </div>
          <div class="col-lg-5 mr-auto ">
            <img  class="img-fluid zoom_01" src="{{asset('assetcp/img/phones.png')}}" alt="" data-zoom-image="{{asset('assetcp/img/phones.png')}}">
          </div>
        </div>

      </div>
      <!-- /.container -->

    </section>
    <!-- /.content-section-a -->
@endsection
   

    

   
