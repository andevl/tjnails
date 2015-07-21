@extends('admin_layouts/main')

@section('admin_content')
<h1>Category</h1>
@foreach( $categories as $category )
<p> <img src="{{ $category->image }}" alt="1">  </p>
<h3> {{ $category->title }} </h3>

	@foreach($category->services as $service)
		<p>{{ $service->title }}</p>

	@endforeach


<a href="{{ url('/admin/category/'.$category->id.'/edit') }}" class="btn btn-info">Edit</a>
{!! Form::open([
	'route' => ['category.destroy', $category->id],
	'method' => 'DELETE'
]) !!}
	<button class="btn btn-danger">Delete</button>
{!! Form::close() !!}
@endforeach


@stop