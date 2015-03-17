<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Accueil</title>
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
