@extends('auth.index')

@section('menu1','active')


@section('content')

<h4><small>Edit Produk</small></h4>
<hr>

<h3>Edit {{ $product->name }}</h3>
{!! Form::model($product, ['route' => ['product.update', $product],'method' =>'patch','files'=>true])!!}
@include('auth.product.partial._form', ['model' => $product])
{!! Form::submit('Edit', ['class'=>'btn btn-primary js-submit-confirm']) !!}
{!! Form::close() !!}


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
}),

$(function () {
        CKEDITOR.replace('ckeditor1');
    });
})
@endsection