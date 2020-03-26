<?php

$database = require "Core/bootstrap.php"; // Makes connection to database and requires necessary files

require Router::load("routes.php")->direct(Request::uri()); // Processes user route request, directs to controller