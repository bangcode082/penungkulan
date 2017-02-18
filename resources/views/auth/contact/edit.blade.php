@extends('auth.index')

@section('menu2','active')


@section('content')

<h4><small>Edit Kategori</small></h4>
<hr>

<div class="panel panel-default">
	<div class="panel-heading">Edit Kontak</div>
	<div class="panel-body">
	{!! Form::model($contact, ['route' => ['contact-product.update', $contact],'method' =>'patch','class'=>''])!!}
		@include('auth.contact.partial._form', ['model' => $contact])
		{!! Form::submit('Edit', ['class'=>'btn btn-primary js-submit-confirm']) !!}
		{!! Form::close() !!}

	</div>
</div>

@endsection

@section('script')
$(document).ready(function () {
$(document.body).on('click', '.js-submit-confirm', function (event) {
event.preventDefault()
var $form = $(this).closest('form')
var $el = $(this)
var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'Proses ini tidak bisa di batalkan!'
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