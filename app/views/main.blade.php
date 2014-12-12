<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Collaberal</title>
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<header>
		<div class="header container">
			<ul>
				<li><a href="" class="header-link">Home</a></li>
				<li><a href="register" class="header-link">Register</a></li>
				<li><a href="login" class="header-link">Login</a></li>
			</ul>
		</div>
	</header>
	<section>
		<div class="content container">
			@yield('content')
		</div>
	</section>
	<footer>
		<div class="footer container">
			<ul>
				<li><a href="" class="header-link">Home</a></li>
				<li><a href="register" class="header-link">Register</a></li>
				<li><a href="login" class="header-link">Login</a></li>
			</ul>
			<div class="footer-copyright">&copy;2014</div>
		</div>
	</footer>
</body>
</html>
