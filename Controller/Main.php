<?php
namespace Controller;

use App\Controller\Controller;

class Main extends Controller
{
	public function actionIndex()
	{
		$this->render('index', 'say hello');
	}

	public function actionSay()
	{
		$this->render('asd');
		echo "Hello world";
		die();
	}
}
