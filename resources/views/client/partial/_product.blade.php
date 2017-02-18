@foreach($products as $product)

<div class="col-sm-3">
	<div class="product-image-wrapper">
		<div class="single-products">
			<div class="productinfo text-center">
				<img src="img/{{ $product->photo }}" alt="" style="height: 150px;" />
				<div style="margin-top: 30px;">
					<h2>Rp {{ number_format($product->price,2) }}</h2>
				</div>

				<div style="margin-top: 15px; height: 50px">
				<p><strong>{{ substr($product->name,0,30) }}</strong></p>
				</div>

				<div style="margin-top: 15px; height: 50px">
				<a href="{{ url('details',$product->id) }}" class="btn btn-warning add-to-cart"><i class="fa fa-laptop"></i>Detail</a>
				</div>
			</div>

		</div>
	</div>
</div>

@endforeach