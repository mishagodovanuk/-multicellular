<?php
namespace App\View;

/*
* Class View
*/
class View 
{
	// @var object App\View $_classInstance
    protected $_classInstance;

    private $_pageData;

    private $_viewPage;
    /*
	* Function getInstance
	*/

	public function setPageData($data)
	{
		$this->_pageData = $data;
	}

	private function getBody()
	{
		require_once $_SERVER['DOCUMENT_ROOT'] . '/View/Pages/' . $GLOBALS['controller'] . '/' . $this->_viewPage . '.php';
	}
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
		$this->_viewPage = $view;

		require_once $_SERVER['DOCUMENT_ROOT'] . '/View/Templates/' . $GLOBALS['controller'] . '.php';
	}
}
