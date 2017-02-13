<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
{!! Form::label('title', 'Nama Kategori') !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
	{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {!! $errors->has('parent_id') ? 'has-error' : '' !!}">
	{!! Form::label('parent_id', 'Induk') !!}
	{!! Form::select('parent_id', [''=>'']+App\Category::pluck('title','id')->all(), null, ['class'=>'form-control']) !!}
	{!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
</div>
