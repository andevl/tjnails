@extends('admin_layouts/main')

@section('admin_content')
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<h1>Show Service</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
	{{$service->title}}
	<a href="{{route('services.edit', $service->id )}}" class="btn btn-info">Edit</a>
	{!! Form::open([
	'route' => ['services.destroy', $service->id],
	'method' => 'DELETE'
]) !!}
	<button class="btn btn-danger">Delete</button>
{!! Form::close() !!}

	</div>
	</div>
</div>
@stop