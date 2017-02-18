<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
	{!! Form::label('name', 'Judul Produk') !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
	{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('price') ? 'has-error' : '' !!}">
	{!! Form::label('price', 'Harga') !!}
	{!! Form::number('price', null, ['class'=>'form-control']) !!}
	{!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('category_lists') ? 'has-error' : '' !!}">
	{!! Form::label('category_lists', 'Kategori') !!}
	{{-- Simplify things, no need to implement ajax for now --}}
	{!! Form::select('category_lists', ['0'=>'']+App\Category::pluck('title','id')->all(), null, ['class'=>'form-control']) !!}
	{!! $errors->first('category_lists', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('status') ? 'has-error' : '' !!}">
{!! Form::select('status', ['null'=>'Semua status']+App\Product::statusList(),isset($status) ? $status : null, ['class'=>'form-control']) !!}
{!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {!! $errors->has('photo') ? 'has-error' : '' !!}">
	{!! Form::label('photo', 'Foto Produk (jpeg, png)') !!}
	{!! Form::file('photo') !!}
	{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
	@if (isset($model) && $model->photo !== '')
	<div class="row">
		<div class="col-md-6">
			<p>Current photo:</p>
			<div class="thumbnail">
				<img src="{{ url('/img/' . $model->photo) }}" class="img-rounded">
			</div>
		</div>
	</div>
	@endif

</div>

<div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
	{!! Form::label('description', 'Deskripsi') !!}
	{!! Form::textarea('description', null, ['class'=>'form-control','id'=>'ckeditor1']) !!}
	{!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>

	
