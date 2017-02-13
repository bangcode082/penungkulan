@extends('auth.index')

@section('menu2','active')
@section('content-title')
<h4><small>Daftar Kategori</small></h4>
<hr>
@endsection


@section('content')

<h3>Daftar Kategori <small><a href="{{ route('category-product.create') }}" class="btn btn-warning btn-sm">Tambah Kategori</a></small></h3>
@include('auth.category.partial._search')
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama Kategori</th>
			<th>Induk</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{ $category->title }}</td>
			<td>{{ $category->parent ? $category->parent->title : '' }}</td>
			<td>
				{!! Form::model($category, ['route' => ['category-product.destroy', $category], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
				<a href="{{ route('category-product.edit', $category->id)}}">Edit</a> |
				{!! Form::submit('Hapus', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
				{!! Form::close()!!}
			</td>
		</tr>
		
		@endforeach
	</tbody>
</table>

{{ $categories->links() }}

@endsection

@section('script')
$(document).ready(function () {
$(document.body).on('click', '.js-submit-confirm', function (event) {
event.preventDefault()
var $form = $(this).closest('form')
var $el = $(this)
var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'Kamu akan kehilangan kategori ini!'
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