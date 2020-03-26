<?php

require "Core/Database/connection.php";
require "Core/Database/QueryBuilder.php";
require "Core/router.php";
require "Core/request.php";
$database_info = require "Core/Database/config.php"; // DB connection/login info

return new QueryBuilder(Connection::make($database_info));