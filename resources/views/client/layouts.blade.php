<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Katalog Penungkulan</title>
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    @include('client.partial._assets')
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{ url('/') }}"><img src="{{url('client/images/home/logo.png')}}" alt="" /></a>
							
						</div>

						<!-- <div class="btn-group pull-right">							

					</div> -->
				</div>
				<div class="col-sm-8">
					<!-- <div class="shop-menu pull-right"> -->
					
					@yield('search')
					

				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class="header-bottom"><!--header-bottom-->	
	</div><!--/header-bottom-->
</header><!--/header-->



@yield('content')

@include('client.partial._footer')

@include('client.partial._js')

<script type="text/javascript">
	@yield('script')
</script>

@include('sweet::alert')
</body>
</html>