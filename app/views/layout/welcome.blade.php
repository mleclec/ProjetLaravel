<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Gravatar</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>
	<body>
		<header>
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="{{ url('/'); }}">Gravatar</a>
                                </div>
                                <ul class="nav navbar-nav navbar-left">
                                    <li> {{ HTML::link('search', 'Rechercher'); }}</li>
                                    <li> {{ HTML::link('information', 'Information'); }} </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li> {{ HTML::link('connection', 'Se connecter'); }}</li>
                                </ul>
                            </div>
                        </nav>
		</header>

		<div class="jumbotron">
                    <div class="container">
                        <h1> Bienvenue sur GRAVATAR !!</h1>
                        <p> Le gestionnaire d'avatar... </p>
                    </div>
                </div>

	</body>
</html>
