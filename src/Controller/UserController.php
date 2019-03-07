<?php

namespace Controller;

use Core\Controller as Controller;

class UserController extends Controller
{
	public function registerAction()
	{
		$com = new \Core\Controller;
		$com->render("register");
		$test = new \Model\UserModel;
		//$test->save();
		//$test->create('users', 'salut', 'VARCHAR(255)');
		$test->create('users', array($_POST['email'], $_POST['password']));
	}


}
