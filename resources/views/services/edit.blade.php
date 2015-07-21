@extends('admin_layouts/main')

@section('admin_content')
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<h1>Edit Service FORM</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
{!! Form::model($service, [
	'route' => ['services.update', $service->id],
	'method' => 'PUT'
]) !!}

<select name="category_id">
@foreach($categories as $category)
	<option value="{{ $category->id }}">{{ $category->title }}</option>
@endforeach
</select>
		{!! Form::label('title','Title', ['class' => 'control-label']) !!}
		{!! Form::text('title',null,['class' => 'form-control']) !!} <br />
 
		{!! Form::submit('Them moi', ['class' => 'btn btn-primary'])!!}

	{!! Form::close() !!}
	</div>
	</div>
</div>
@stop