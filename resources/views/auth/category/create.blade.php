@extends('auth.index')

@section('menu2','active')


@section('content')

<h4><small>Tambah Kategori</small></h4>
<hr>

<h3>Tambah Kategori Baru</h3>

{!! Form::open(['route' => 'category-product.store'])!!}
@include('auth.category.partial._form')
{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}


@endsection