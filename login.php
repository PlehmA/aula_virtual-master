<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Andres Plehm">
<link rel="icon" href="Images\idea-genial.png">
<title>..--|Aula virtual|--..</title>
<link href="CSS/bootstrap.min.css" rel="stylesheet">
<link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="CSS/jumbotron-narrow.css" rel="stylesheet">
<link rel="stylesheet" href="CSS/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right">
					<li role="presentation" class="active"><a href="index.html">Home</a></li>
					<li role="presentation"><a href="#">FAQ</a></li>
					<li role="presentation"><div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span><input class="form-control" type="text" placeholder="Email address"></div></li>
					<li role="presentation"><div class="input-group"><span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span><input class="form-control" type="password" placeholder="Password"></div></li>
				</ul>
			</nav>
			<h3 class="text-muted">Aula virtual</h3>
		</div>
		<div class="container">
			<form class="form-signin">
				<h2 class="form-signin-heading">Login</h2>
				<label for="inputEmail" class="sr-only">Nombre de usuario</label> 
				<input	type="text" id="inputUser" class="form-control"	placeholder="Usuario" required autofocus> 
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		<div class="checkbox">
				<label> <input type="checkbox" value="remember-me">Recordar</label>
		</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			</form>
		</div>
		<footer class="footer">
            <p>&copy; 2016 Todos los derechos reservados. <a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a>
			<span><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></a></i></span>
			</p>
		</footer>

	</div>
	<script src="JS/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
