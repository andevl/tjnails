@extends('layouts/main')

@section('title')
	TJ Nails
@stop

@section('content')

       <div class="post_section">        
            <h2>Services</h2>            
            <div class="post_content">
            @foreach($categories as $category)
                <a name="{{$category->title}}"></a>
                <div class="servicesgroup">
                   <div class="servicestitle">{{ $category->title }}</div>
                    <div class="servicesimg"><img src="{{$category->image}}" /></div>
                    <div class="servicesrowgroup">
                    @foreach($category->services as $service)
                        <div class="servicesrow">{{ $service->title }}</div>
            @endforeach   
                    </div>
                </div>  
                @endforeach              
            </div>  
         </div>     
@stop