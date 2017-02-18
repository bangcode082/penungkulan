@extends('client.layouts')

@section('search')
	@include('client.partial._search')
@endsection

@section('content')
@include('client.partial._notification')
@include('client.partial._slider')

<section>
	<div class="container">
		<div class="row">
			@include('client.partial._category')

			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
				@if($ctgry != null)
					<h2 class="title text-center">Produk Untuk {{$ctgry->title}}</h2>
				@else
					<h2 class="title text-center">Produk Keburusan</h2>
				@endif			
				</div><!--features_items-->

				<div class="category-tab">

					<div class="tab-content">							

						@include('client.partial._product')

					</div>			
				

				</div>

				<div>
					{!! $products->appends(compact('cat', 'q'))->links() !!}
				</div>
			</div><!--/category-tab-->



		</div>
	</div>
	
</section>

@endsection