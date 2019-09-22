<?php
namespace Controller;

use App\Controller\Controller;

class Main extends Controller
{
	public function actionIndex()
	{
		$this->render('body');
		echo "Main index controller action";
		die();
	}

	public function actionSay()
	{
		echo "Hello world";
		die();
	}
}
