<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
	
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href=" {{ route('category.index') }} ">Category</a>
			<a class="navbar-brand" href=" {{ route('services.index') }} ">Services</a>
			<a class="navbar-brand" href=" {{ route('gallery.index') }} ">Gallery</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">


			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('category.create') }}">New Category</a></li>
				<li><a href="{{ route('services.create') }}">New Service</a></li>
				<li><a href="{{ route('gallery.create') }}">New Gallery</a></li>
				<center><a href="{{Asset('logout')}}">Đăng xuất</a></center>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>


	@yield('admin_content')
</body>
</html>