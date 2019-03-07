<?php

namespace Model;
class UserModel
{
	private $bdd;
	private $email;
	private $password;

	public function __construct()
	{
		$this->bdd = new \PDO('mysql:dbname=users;host=localhost', 'root', '');
	}

	public function save()
	{
		if(isset($_POST['email']))
		{
			$req = $this->bdd->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
			$req->bindValue(':email', $_POST['email']);
			$req->bindValue(':password', $_POST['password']);
			$req->execute();
		}
	}

	public function create($table, $fields)
	{
		$req = $this->bdd->prepare("INSERT INTO $table (email, password) VALUES (:email, :password)");
		$req->bindValue(':email', $fields[0]);
		$req->bindValue(':password', $fields[1]);
		$req->execute();
	}

	/* public function create($table, $add, $type)
	{
	$req = $this->bdd->prepare("ALTER TABLE $table ADD $add $type");
	$req->execute();
} */
}
