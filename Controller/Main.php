<?php
namespace User\Controller;

use App\Controller\Controller;
use User\Model\Data;

/**
 * Class Main
 *
 * @package Controller
 */
class Main extends Controller
{
    /**
     *  Action index.
     */
    public function actionIndex()
	{
	    $data = new Data();
	    $data = $data->getUserData()->fetchAll();

	    $this->getView()->setTitle('Home page title');
		$this->render('index', $data);
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
