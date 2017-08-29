<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>Penungkulan</span>-Store</h1>
								<h2>{{ $banner1->name }}</h2>
								
								<a href="{{ url('/details',$banner1->id) }}" class="btn btn-default get">Lihat Detail</a>
							</div>
							<div class="col-sm-5">
								<img src="{{url('img',$banner1->photo)}}" class="girl img-responsive" alt="" style="max-height: 300px" />									
							</div>
						</div>

								
						@foreach($banner as $slider)
						<div class="item">
							<div class="col-sm-6">
								<h1><span>Penungkulan</span>-Store</h1>
								<h2>{{$slider->name}}</h2>
								
								<a href="{{ url('/details',$slider->id) }}" class="btn btn-default get">Lihat Detail</a>
							</div>
							<div class="col-sm-5">
								<img src="{{url('img',$slider->photo)}}" class="img-responsive" alt="" style="max-height: 300px"/>									
							</div>
						</div>
						@endforeach
							
					</div>

					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>


		</div>
	</div>
	</section><!--/slider-->