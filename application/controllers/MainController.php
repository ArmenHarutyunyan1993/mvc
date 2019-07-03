<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;
use PDO;

class MainController extends Controller{

	public function indexAction(){

		$db = new Db;

		$params = [
			'id' => 2
		];

		$data = $db->column("SELECT name FROM users WHERE id = :id",$params);
		debug($data);

		$vars = [
			'name' => 'Mike',
			'age' => 45,
			'numbers' => [1,2,3]
		];

		$this->view->render('Home',$vars);
	}

}