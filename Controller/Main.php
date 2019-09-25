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
     *
     */
    public function actionIndex()
	{
	    $data = new Data();
	    $data->create();
	    var_dump($data->gedTableData());die();

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
