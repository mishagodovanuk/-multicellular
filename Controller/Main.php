<?php
namespace Controller;

use App\Controller\Controller;

/**
 * Class Main
 *
 * @package Controller
 */
class Main extends Controller
{
    /**
     *
     */
    public function actionIndex()
	{
	    $this->getView()->setTitle('Home page title');
		$this->render('index', 'say hello');
	}

    /**
     *
     */
    public function actionSay()
	{
		$this->render('asd');
		echo "Hello world";
		die();
	}
}
