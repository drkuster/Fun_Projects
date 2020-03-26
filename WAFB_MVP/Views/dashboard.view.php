<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome!</title>
		<style>
			h1
			{
				font-family: Arial;
				font-size: 2em;
				background-color: #ffffff;
				border-style: solid;
				border-color: #000000;
				width: 20%;
				height: 40px;
				border-radius: 15px;
				padding-top: 1em;
				padding-bottom: 1em;
				padding-left: 1em;
				padding-right: 1em;
			}

			h2
			{
				font-family: Arial;
				font-size: 1.25em;
				background-color: #ffffff;
				border-style: solid;
				border-color: #000000;
				width: 20%;
				height: 40px;
				border-radius: 15px;
				padding-top: 1em;
				padding-left: 1em;
				padding-right: 1em;
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

			#sign-out-button
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
		<header>
			<center><h1>Welcome, <?= $query[0]->first_name; ?>!<br></h1></center>
		</header>
		<center><h2>You have volunteered for: <?= $query[0]->volunteer_hours; ?> hours</h2></center>
		<center><a href="./" style="text-decoration: none;">
			<button class="btn" id="sign-out-button">Sign Out</button>
		</a></center>
	</body>
</html>