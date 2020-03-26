<?php

if (($_POST['first_name'] != NULL) && ($_POST['last_name'] != NULL) 
	&& ($_POST['email'] != NULL) && ($_POST['username'] != NULL) && ($_POST['password'] != NULL))
{
	$database->addUser($_POST['first_name'], $_POST['last_name'], $_POST['email'],
					   $_POST['username'], $_POST['password']);
	header("Location:dashboard");
}

require "Views/sign-up.view.php";