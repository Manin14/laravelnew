<!DOCTYPE html>
<html>
<head>
	<title> @yield('judul')</title>
	<!-- css bootstap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container mt-5" >
	<nav >
		<a class="btn btn-primary" href="{{ url('/portofolio') }}"> portofolio</a>
		<a class="btn btn-primary" href="{{ url('/portofolio/create') }}"> new + </a>
	</nav>

	<main>
	 @yield('content')
	</main>
</body>
</html>