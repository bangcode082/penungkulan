@extends('auth.index')

@section('menu1','active')
@section('content-title')
<h4><small>Daftar Produk</small></h4>
<hr>
@endsection


@section('content')

<h3>Daftar Produk <small><a href="{{ route('product.create') }}" class="btn btn-warning btn-sm">Tambah Produk</a></small></h3>
@include('auth.product.partial._search')
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama Produk</th>
			<th>Kategori</th>			
			<th>Deskripsi</th>
			<th>Status</th>
			<th>Harga</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		@foreach($products as $product)
		<tr>
			<td  width="20%">{{ $product->name }}</td>
			<td width="15%">
				<span class="label label-primary">
					<i class="fa fa-btn fa-tags"></i>
					{{ $product->categories->title }}
				</span>				
			</td>
			<td width="35%">{!! substr($product->description,0,80) !!} ...</td>
			<td>{{ $product->human_status }}</td>
			<td width="15%">Rp . {{ $product->price }}</td>
			<td width="15%">
				{!! Form::model($product, ['route' => ['product.destroy', $product], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
				<a href="{{ route('product.edit', $product->id)}}">Edit</a> |
				{!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
				{!! Form::close()!!}
			</td>
		</tr>

		@endforeach
	</tbody>
</table>

<div>
{!! $products->appends(compact('q'))->links() !!}
</div>

@endsection

@section('script')
$(document).ready(function () {
$(document.body).on('click', '.js-submit-confirm', function (event) {
event.preventDefault()
var $form = $(this).closest('form')
var $el = $(this)
var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'Kamu akan kehilangan Produk ini!'
swal({
title: 'Kamu yakin?',
text: text,
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#DD6B55',
confirmButtonText: 'Yap, lanjutkan!',
cancelButtonText: 'Batal',
closeOnConfirm: true
},
function () {
$form.submit()
})
})
})
@endsection