<div class="pull-right">
	{!! Form::open(['url' => 'catalogs', 'method'=>'get','class'=>'form-inline']) !!}
	<div class=" form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
		{!! Form::text('q', $q, ['class'=>'form-control','placeholder'=>'Cari Produk...']) !!}
		{!! $errors->first('q', '<p class="help-block">:message</p>') !!}
	</div>
	{!! Form::hidden('cat', $cat) !!}
	{!! Form::submit('Cari', ['class'=>'btn btn-warning']) !!}
	
	{!! Form::close() !!}

</div>

