<!DOCTYPE html>
<html>
	<head>
		<title>Gravatar</title>
                <!-- Boostrap CCS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                <!-- Boostrap JS -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                
                <script language='Javascript'>
                    // use to display avatars and call in delete avatar 
                    function verifForm(f){
                        var del = confirm('Confirmer la suppression ?');
                        if(del === true){
                            return true;
                        }else{
                            return false;
                        }
                    }
                </script>
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