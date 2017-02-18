<div class="form-group {!! $errors->has('address') ? 'has-error' : '' !!}">
{!! Form::label('address', 'Alamat') !!}
	{!! Form::text('address', null, ['class'=>'form-control']) !!}
	{!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('phonenumber') ? 'has-error' : '' !!}">
	{!! Form::label('phonenumber', 'No Handphone') !!}
	{!! Form::number('phonenumber', null, ['class'=>'form-control']) !!}
	{!! $errors->first('phonenumber', '<p class="help-block">:message</p>') !!}
</div>
