@extends('admin_layouts/main')

@section('admin_content')
<h1>Edit Gallery Form</h1>
{!! Form::model($gallery,
    array(
        'route' => ['gallery.update', $gallery->id], 
        'class' => 'form', 
        'novalidate' => 'novalidate', 
        'method' => 'PUT',
        'files' => true)) !!}

<div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image', null) !!}
</div>

<div class="form-group">
    {!! Form::submit('Update Image!') !!}
</div>
{!! Form::close() !!}
</div>

@stop