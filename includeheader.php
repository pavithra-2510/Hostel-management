<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="indexCSS.css">
</head>
<body>
        <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" >
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav mr-auto" >
                    </ul>
                    <ul class="navbar-nav ml-auto" style="margin: 0 0 0 0 ;text-decoration: none;font-size: 25px;">	
                        <li class="nav-item">
                            <a href="resident.php" style="color: darkgreen;font-weight: bold;text-decoration: none;">Resident Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </li>
                           <li class="nav-item">
                            <a href="residentlogin.php" style="color: darkgreen;font-weight: bold;text-decoration: none;">Resident Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </li>
                        <li class="nav-item">
                            <a href="index.php" style="color: darkgreen;font-weight: bold;text-decoration: none;">Admin Login</a>
                        </li>         
                    </ul>
                </div>
            </div>
        </nav>
</div>
</body>
</html>