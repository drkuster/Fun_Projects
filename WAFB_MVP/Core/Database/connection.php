<?php

class Connection
{
	public static function make($info)
	{
		try // Try to make a connection to the db & return the PDO object associated with it
		{
			return new PDO($info['connection'] . ';dbname=' . $info['name'], $info['username'], $info['password']);
		}

		catch(PDOException $e) // If connection fails, display fail message
		{
			die($e->getMessage());
		}
	}
}