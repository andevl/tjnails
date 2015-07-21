<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from myesalon.com/ftemplate/baamboo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2015 02:22:40 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> @yield('title') </title>
    <meta name="Description" content="Baamboo Spa located in City,State is a local nail spa that offers quality service including Nail Treatment,Facial and SkinCare,Waxing,Body Massage."/>
    <meta name="KEYWORDS" content="D-Tox Foot Spa,Gel Color Manicure,Eye Brow Tattoo,Makeup,Wedding,Manicure,Pedicure,Hot stone,Mole Removal,Fredericksburg,Virginia"/>
    <link href="images/icon.html" rel="shortcut icon"/>

<link href="{{ asset('css/templatemo_style.css') }}" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="templatemo_wrapper">
    <div id="templatemo_left_column">
        @include('layouts/menu')
        @include('layouts/sidebar')
    </div> <!-- end of templatemo_left_column -->
    <div id="templatemo_content">
        @include('layouts/banner')
        @yield('content')    
    </div> <!-- end of content -->
</div> <!-- end of templatemo_wrapper -->
@include('layouts/footer')

</body>
</html>