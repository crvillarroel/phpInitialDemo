<?php

require_once ROOT_PATH . '/app/models/User.class.php';

class UserController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = "hello from Users";
	}
	
	public function listAction()
	{
		
		$users=new UserModel();
		
		$this->view->dondeestoy = "Lista de usuarios";
		$this->view->datos = $users->get_users();
	}
}
