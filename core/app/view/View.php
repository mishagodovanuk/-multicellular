<?php
namespace App\View;

/*
* Class View
*/
class View 
{
	// @var object App\View $_classInstance
    protected $_classInstance;	

    /*
	* Function getInstance
	*/
	public function getInstance()
	{
		if ($_classInstance === null) {
			$this->_classInstance = $this;
		}

		return $this->$_classInstance;
	}

	/*
	* Function renderPage
	*/
	public  function renderPage(string $view)
	{
		require_once $_SERVER['DOCUMENT_ROOT'] . '/View/Templates/' . $GLOBALS['controller'] . '.php'; 
	}
}
