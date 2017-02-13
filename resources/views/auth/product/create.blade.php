@extends('auth.index')

@section('menu1','active')


@section('content')

<h4><small>Tambah Produk</small></h4>
<hr>

<h3>Tambah Produk Baru</h3>

{!! Form::open(['route' => 'product.store','files'=>true])!!}
@include('auth.product.partial._form')
{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}


@endsection