@extends('auth.index')

@section('menu6','active')

@section('content')

<h4><small>Profile</small></h4>
<hr>
<div class="panel panel-default">
	<div class="panel-heading">Ubah Password</div>
	<div class="panel-body">
		@if (session()->has('success'))
		<div class="alert alert-success">{{ session('success') }}</div>
		@endif

		{!! Form::open(['url'=>'change-password','method'=>'post','class'=>'form-horizontal']) !!}

		{{ csrf_field() }}
		{{ method_field('put') }}

		<!-- password lama -->
		<div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">

			{!! Form::label('oldPassword','Password Lama',['class'=>'col-md-4 control-label']) !!}


			<div class="col-md-6">
				{!! Form::password('current_password',['class'=>'form-control']) !!}
				{!! $errors->first('current_password','<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<!-- password baru -->
		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			{!! Form::label('password','Password Baru',['class'=>'col-md-4 control-label']) !!}

			<div class="col-md-6">
				{!! Form::password('password',['class'=>'form-control']) !!}
				{!! $errors->first('password','<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
			{!! Form::label('password_confirmation','Konfirmasi Password',['class'=>'col-md-4 control-label']) !!}

			<div class="col-md-6">
				{!! Form::password('password_confirmation',['class'=>'form-control']) !!}
				{!! $errors->first('password_confirmation','<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-8 col-md-offset-4">
				{!! Form::submit('Ubah Password',['class'=>'btn btn-primary']) !!}						
			</div>
		</div>
		{!! Form::close() !!}

	</div>
</div>

@endsection
