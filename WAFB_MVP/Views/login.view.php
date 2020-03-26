<?php
	setcookie('username', $_POST['username']);
	setcookie('password', $_POST['password']);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Log In</title>
		<style>
			h1
			{
				font-family: Arial;
				font-size: 2em;
			}

			h4
			{
				width: 30%;
				border-style: solid;
				padding-top: .5em;
				padding-bottom: .5em;
				background-color: #f21313;
				border-width: 50%;
				border-radius: 15px;
				border-color: #ffffff;
				color: #ffffff;
				font-family: Arial;
			}

			body
			{
				background-image: url(Views/Food_WAFB.jpg);
				background-size: 70%;
			}

			#input
			{
				font-family: Arial;
				width: 30%;
				height: 40px;
				border-radius: 15px;
				padding-left: 1em; 
				font-size: 1.5em;
			}

			#submit-box
			{
				background-color: #4CAF50; 
				font-family: Arial;
				width: 20%;
				height: 50px;
				border-radius: 15px;
				border-color: #000000;
				padding-left: 1em; 
				font-size: 1.5em;
				color: #000000;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<center><img src="Views/WAFB-Logo.png"></center>
		<br>
		<center><form method="POST" action="#">
			<input type="text" name="username" placeholder=" Enter your username " id="input">
			<br>
			<br>
			<input type="password" name="password" placeholder=" Enter your password " id="input">
			<br>
			<br>
			<input type="submit" name="submit" value="Log In" id="submit-box">
			<?php if($incorrect == true) : ?>
				<h4>Incorrect Password</h4>
			<?php endif; ?>
		</form></center>
	</body>
</html>