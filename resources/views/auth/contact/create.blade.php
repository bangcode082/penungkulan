@extends('auth.index')

@section('menu4','active')


@section('content')
<h4><small>Edit Kategori</small></h4>
<hr>

<div class="panel panel-default">
	<div class="panel-heading">Buat Kontak</div>
	<div class="panel-body">
	
		{!! Form::open(['route' => 'contact-product.store'])!!}
		@include('auth.contact.partial._form')
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
		{!! Form::close() !!}

	</div>
</div>




@endsection