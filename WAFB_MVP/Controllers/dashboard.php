<?php
$query = $database->findUser($_COOKIE['username'], $_COOKIE['password']);

require "Views/dashboard.view.php";