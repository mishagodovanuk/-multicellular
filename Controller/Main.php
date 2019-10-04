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
	    $this->getRedirect()->redirect('main/say', ['key' => 'value', 'key1' => 'value1']);
	    $data = new Data();
	    $data = $data->getData()->fetchAll();

	    $this->getView()->setTitle('Home page title');
		$this->render('index', $data);
	}

    /**
     * Action say.
     */
    public function actionSay()
	{
		echo "Hello world";
		die();
	}
}
