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
		<div class="container header">
			<div class="inner-container">
				<ul>
					<li><a href="" class="header-link">Home</a></li>
					<li><a href="register" class="header-link">Register</a></li>
	                @if(Auth::check())
	                <li><a href="profile/{{ isset($id) ? $id : 0 }}" class="header-link">My Account</a></li>
	                <li><a href="logout" class="header-link">Logout</a></li>
	                @else
					<li><a href="login" class="header-link">Login</a></li>
	                @endif
				</ul>
			</div>
		</div>
	</header>
	<section>
		<div class="container content">
			<div class="inner-container">
				@yield('content')
			</div>
		</div>
	</section>
	<footer>
		<div class="container footer">
			<div class="inner-container">
				<ul>
					<li><a href="" class="header-link">Home</a></li>
					<li><a href="register" class="header-link">Register</a></li>
					<li><a href="login" class="header-link">Login</a></li>
				</ul>
				<div class="footer-copyright">&copy;2014</div>
			</div>
		</div>
	</footer>
</body>
</html>
