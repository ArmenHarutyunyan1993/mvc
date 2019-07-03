<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;
use PDO;

class MainController extends Controller{

	public function indexAction(){
		
		$vars = [
			'name' => 'Mike',
			'age' => 45,
			'numbers' => [1,2,3]
		];

		$this->model->getNews();

		$this->view->render('Home',$vars);
	}

}