@extends('auth.index')

@section('menu5','active')
@section('content-title')
<h4><small>Pesan Masuk</small></h4>
<hr>
@endsection


@section('content')


<div class="panel panel-default">
	<div class="panel-heading">Detail Pesan</div>
	<div class="panel-body">
		
		
		<strong>Nama Pengirim: </strong>
		<p>{{ $message->sender }}</p>
		<br>
		<strong>Alamat Email Pengirim:</strong>
		<p>{{ $message->email }}</p>
		<br>
		<strong>Isi Pesan:</strong>
		<p>{{ $message->message }}</p>
		<br>
		{!! Form::model($message, ['route' => ['askandanswer-product.destroy', $message], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
		<a class="btn btn-warning" href="{{ route('askandanswer-product.index')}}">Kembali</a>
		{!! Form::submit('Hapus', ['class'=>'btn btn-danger js-submit-confirm']) !!}
		{!! Form::close()!!}


	

	</div>
</div>


@endsection

@section('script')
$(document).ready(function () {
$(document.body).on('click', '.js-submit-confirm', function (event) {
event.preventDefault()
var $form = $(this).closest('form')
var $el = $(this)
var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'Kamu ingin menghapus Kontak ini?!'
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