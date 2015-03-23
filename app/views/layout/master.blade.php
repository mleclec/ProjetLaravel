<!DOCTYPE html>
<html>
	<head>
		<title>Gravatar</title>
                <link rel="stylesheet" href="css/bootstrap.css">
                <script src="js/bootstrap.js"></script>
                
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>
	<body>
            <header>			
                @yield('header')
            </header>
            
            <div class="container" >
		@yield('content')
            </div>
	</body>
</html>