@extends('auth.index')

@section('menu4','active')
@section('content-title')
<h4><small>Kontak</small></h4>
<hr>
@endsection


@section('content')


<div class="panel panel-default">
	<div class="panel-heading">Kontak</div>
	<div class="panel-body">
		@if($contact==null)
		<p>Belum Ada Contact</p>
		<a href="{{ route('contact-product.create') }}" class="btn btn-warning">Tulis Kontak</a>

		@else
		<strong>Alamat: </strong>
		<p>{{ $contact->address }}</p>
		<br>
		<strong>No Handphone</strong>
		<p>{{ $contact->phonenumber }}</p>
		<br>
		{!! Form::model($contact, ['route' => ['contact-product.destroy', $contact], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
		<a class="btn btn-warning" href="{{ route('contact-product.edit', $contact->id)}}">Edit</a>
		{!! Form::submit('Hapus', ['class'=>'btn btn-danger js-submit-confirm']) !!}
		{!! Form::close()!!}


		@endif

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