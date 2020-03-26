<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function findUser($username, $password)
	{
		if(($username == NULL) || ($password == NULL))
		{
			return "Blank";
		}

		else
		{
			$statement = $this->pdo->prepare("select * from UserInfo where username='".$username."' and password='".$password."' limit 1");

			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_CLASS);
		}
	}

	public function addUser($first_name, $last_name, $email, $username, $password)
	{
		try
		{
			$sql = "INSERT INTO UserInfo (username, password, first_name, last_name, email)
					VALUES ('{$username}', '{$password}', '{$first_name}', '{$last_name}', '{$email}')";
			$this->pdo->exec($sql);
		}

		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	}
}