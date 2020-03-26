<?php
	setcookie('first_name', $_POST['first_name']);
	setcookie('last_name', $_POST['last_name']);
	setcookie('email', $_POST['email']);
	setcookie('username', $_POST['username']);
	setcookie('password', $_POST['password']);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<style>
			h4
			{
				width: 30%;
				border-style: solid;
				padding-top: .5em;
				padding-bottom: .5em;
				background-color: #4CAF50;
				border-width: 50%;
				border-radius: 15px;
				border-color: #ffffff;
				color: #000000;
				font-family: Arial;
				text-align: center;
				padding-left: 1em;
			}

			body
			{
				background-image: url(Views/Food_WAFB.jpg);
				background-size: 70%;
			}

			#btn-sign-up
			{
				background-color: #4CAF50;
				font-size: 1.5em;
				border-color: #ffffff;
				width: 20%;
				height: 70px;
			}

			input
			{
				font-family: Arial;
				width: 40%;
				height: 40px;
				border-radius: 15px;
				padding-left: 1em; 
				font-size: 1em;
			}
		</style>
	</head>
	<body>
		<center><img src="Views/WAFB-Logo.png"></center>
		<br>
		<center><form method="POST" action="#">
			<h4>First Name: <input type="text" name="first_name" placeholder=" Enter your first name "></h4>
			<h4>Last Name: <input type="text" name="last_name" placeholder=" Enter your last name "></h4>
			<h4>Email: <input type="text" name="email" placeholder=" Enter your email "></h4>
			<h4>Username: <input type="text" name="username" placeholder=" Enter your username "></h4>
			<h4>Password: <input type="password" name="password" placeholder=" Enter your password "></h4>
			<input type="submit" name="submit" value="Sign Up" id="btn-sign-up">
		</form></center>
	</body>
</html>