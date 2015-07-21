@extends('admin_layouts/main')

@section('admin_content')
<h1>Create Gallery Form</h1>
{!! Form::open(
    array(
        'route' => 'gallery.store', 
        'class' => 'form', 
        'novalidate' => 'novalidate', 
        'files' => true)) !!}





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