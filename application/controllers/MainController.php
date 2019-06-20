<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller{

	public function indexAction(){

		$vars = [
			'name' => 'Mike',
			'age' => 45,
			'numbers' => [1,2,3]
		];

		$this->view->render('Home',$vars);
	}

}