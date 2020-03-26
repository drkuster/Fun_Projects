<?php

$incorrect = false;
$result = $database->findUser($_POST['username'], $_POST['password']);

if ($result != "Blank") // Initial landing
{
	if ($result != NULL) // User exists!
	{
		header("Location:dashboard");
	}

	else //User does not exist
	{
		$incorrect = true;
	}
}

require "Views/login.view.php";