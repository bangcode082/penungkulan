<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard - Katalog Produk</title>
  @include('auth.partial._assets')
</head>
<body>

  <div class="container-fluid">
    <div class="row content">

      <!-- tempat include menu -->
      @include('auth.partial._navigation')

      
      <!-- tempat konten -->
      <div class="col-sm-8">
        @yield('content-title')
        @include('auth.partial._notification')
        @yield('content')
      </div>

    </div>
  </div>

  @include('auth.partial._footer')

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script type="text/javascript">
    @yield('script')
  </script>
  
  @include('sweet::alert')

</body>
</html>
