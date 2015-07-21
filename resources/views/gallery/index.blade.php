@extends('admin_layouts/main')

@section('admin_content')
<h1>Gallery</h1>
@foreach( $galleries as $gallery )
<p> <img src="{{ $gallery->image }}"> </p>

<a href="{{ url('/admin/gallery/'.$gallery->id.'/edit') }}" class="btn btn-info">Edit</a>
{!! Form::open([
	'route' => ['gallery.destroy', $gallery->id],
	'method' => 'DELETE'
]) !!}
	<button class="btn btn-danger">Delete</button>
{!! Form::close() !!}
@endforeach


@stop