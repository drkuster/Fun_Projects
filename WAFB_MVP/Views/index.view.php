<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>WAFB MVP</title>
		<style>
			h1
			{
				font-family: Arial;
				font-size: 2em;
			}

			body
			{
				background-image: url(Views/Food_WAFB.jpg);
				background-size: 70%;
			}

			#login-button
			{
				display: block;
				width: 50%;
				border-style: solid;
				border-color: #000000;
				background-color: #4CAF50;
				padding: 14px 28px;
				font-size: 25px;
				cursor: pointer;
				text-align: center;
				font-family: Arial;
				border-radius: 15px;
			}

			#sign-up-button
			{
				display: block;
				width: 50%;
				border-style: solid;
				border-color: #000000;
				background-color: #4CAF50;
				padding: 14px 28px;
				font-size: 25px;
				cursor: pointer;
				text-align: center;
				font-family: Arial;
				border-radius: 15px;
			}

			#user-choice
			{
				border-style: solid;
				border-color: #000000;
				background-color: #ffffff;
				width: 40%;
				padding-top: 2em;
				padding-bottom: 2em;
				border-radius: 15px;
			}
		</style>
	</head>
	<body>
		<center><img src="Views/WAFB-Logo.png"></center>
			<br>
			<center><div id="user-choice">
				<h1>Welcome!</h1><br>
				<center><a href="login" style="text-decoration: none;">
					<button class="btn" id="login-button"><i>Log In</i></button>
				</a></center>
				<br>
				<center><a href="sign-up" style="text-decoration: none;">
					<button class="btn" id="sign-up-button"><i>Sign Up</i></button>
				</a></center>
			</div></center>
	</body>
</html>