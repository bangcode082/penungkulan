@extends('client.layouts')
@section('content')

<section>
	<div class="container">
		<div class="row">
			@include('client.partial._category')

			<div class="col-sm-9 padding-right">			
				
				<div class="product-details"><!--product-details-->
					<div class="col-sm-7">
						<div class="view-product">
							<img src="{{url('img',$product->photo)}}" class="img-responsive" alt="" />
							
						</div>
						

					</div>
					<div class="col-sm-5">
						<div class="product-information"><!--/product-information-->
							<h2>{{ $product->name }}</h2>
							<span>
								<span>Rp {{ number_format($product->price,2) }}</span>
								<br>
							</span>
							@if($contact!=null)	
							<p>
								<strong>Mau Beli Produk ?
									<br>Anda bisa menghubungi <br>nomor HP : <button class="btn btn-danger">{{$contact->phonenumber}}</button><br> atau bisa langsung datang ke : <br>
									{{ $contact->address }}
								</strong>
							</p>						
							@endif
						</div><!--/product-information-->
					</div>
				</div><!--/product-details-->

				<div class="category-tab shop-details-tab"><!--category-tab-->
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#reviews" data-toggle="tab">Detail Produk</a></li>

						</ul>
					</div>
					<div class="tab-content">						

						<div class="tab-pane fade active in" id="reviews" >
							<div class="col-sm-12">
								<ul>

									<li><a href=""><i class="fa fa-calendar-o"></i>{{ date('d F Y',strtotime($product->updated_at)) }}</a></li>
								</ul>
								<p>{!! $product->description !!}</p><br><br><hr>
								<p><b>Tinggalkan Pesan</b></p>

								{!! Form::open(['url' => 'message-create','method'=>'POST'])!!}
									<span>
										{!! Form::text('sender',null,['placeholder'=>'Nama...']) !!}

										{!! Form::email('email',null,['placeholder'=>'Email...']) !!}



									</span>

									{!! Form::textarea('message',null,['placeholder'=>'Tuliskan Pesan anda... cantumkan no hp bila perlu']) !!}
									{!! Form::submit('Kirim Pesan', ['class'=>'btn btn-primary pull-right']) !!}
								{!! Form::close() !!}
					
							</div>
						</div>

					</div>
				</div><!--/category-tab-->

			</div><!--/category-tab-->



		</div>
	</div>

</section>

@endsection

