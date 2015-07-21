@extends('admin_layouts/main')

@section('admin_content')
<h1>Create Category Form</h1>
{!! Form::open(
    array(
        'route' => 'category.store', 
        'class' => 'form', 
        'novalidate' => 'novalidate', 
        'files' => true)) !!}

<div class="form-group">
    {!! Form::label('Product Name') !!}
    {!! Form::text('title', null, array('placeholder'=>'Chess Board')) !!}
</div>



<div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image', null) !!}
</div>

<div class="form-group">
    {!! Form::submit('Create Product!') !!}
</div>
{!! Form::close() !!}
</div>

@stop