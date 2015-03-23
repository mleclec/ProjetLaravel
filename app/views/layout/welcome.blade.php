<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Gravatar</title>
                <link rel="stylesheet" href="css/bootstrap.css">
                <script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="#">Gravatar</a>
                                </div>
                                <ul class="nav navbar-nav navbar-right">
                                    <li> {{ HTML::link('connection', 'Se connecter') }}</li>
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
