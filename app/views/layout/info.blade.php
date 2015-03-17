<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Configuration</title>
	</head>
	<body>
		<header>
			@include('layout.header')
		</header>
		
		<div>
			@yield('content')
		</div>

		<footer>
			@include('layout.footer')
		</footer>
	</body>
</html>
