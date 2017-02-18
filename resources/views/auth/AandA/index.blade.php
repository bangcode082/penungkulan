@extends('auth.index')

@section('menu5','active')
@section('content-title')
<h4><small>Daftar Pesan Masuk</small></h4>
<hr>
@endsection


@section('content')

<h3>Daftar Pesan Masuk </h3>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama Pengirim</th>
			<th>Tanggal Pesan Masuk</th>
		</tr>
	</thead>
	<tbody>
		@foreach($message as $val)
		<tr>
			<td>{{ $val->sender }}</td>
			<td>{{ date('d F Y',strtotime($val->created_at)) }}</td>
			<td>
				{!! Form::model($val, ['route' => ['askandanswer-product.destroy', $val], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
				<a href="{{ route('askandanswer-product.show', $val->id)}}" class="btn btn-xs btn-warning">Lihat Pesan</a> |
				{!! Form::submit('Hapus', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
				{!! Form::close()!!}
			</td>
		</tr>
		@endforeach
		
	</tbody>
</table>

{{-- {{ $categories->links() }} --}}

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