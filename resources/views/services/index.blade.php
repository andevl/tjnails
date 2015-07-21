@extends('admin_layouts/main')

@section('admin_content')
<h1>Service</h1>
@foreach( $services as $service )
<p> {{ $service->title }} </p>
<a href="{{ url('/admin/services/'.$service->id.'/edit') }}" class="btn btn-info">Edit</a>
{!! Form::open([
	'route' => ['services.destroy', $service->id],
	'method' => 'DELETE'
]) !!}
	<button class="btn btn-danger">Delete</button>
{!! Form::close() !!}
@endforeach


@stop