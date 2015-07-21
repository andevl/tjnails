@extends('layouts/main')

@section('title')
	TJ Nails
@stop

@section('content')
 <div class="post_section">        
            <h2>Gallery</h2>            
            <div class="post_content">
                <div id="gallery" >
                     <div class="yoxview">
                     @foreach($galleries as $gallery)
                          <a href="{{ '/gallery/'. $gallery->id }}"><img src="{{$gallery->image}}" width="160" height="160"/></a>    
                     @endforeach
                     </div>
                </div>        
             
            </div>         
         </div>     
@stop
<script type="text/javascript" src="JScript.js"></script>
     <script type="text/javascript" src="yoxview-init.js"></script>
     <script type="text/javascript">
                $(document).ready(function () {
                    $(".yoxview").yoxview();
                });
</script>