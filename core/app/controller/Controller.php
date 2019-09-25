<?php
namespace App\Controller;

use App\View\View;
use App\Controller\Request;
use App\Controller\Session;

/**
 * Class Controller
 *
 * @package App\Controller
 */
class Controller
{
    /**
     * @var \App\View\View
     */
    private $viewInstance;

    /**
     * @var \App\Controller\Request
     */
    private $requestInstance;

    private $sessionInstance;

    /**
     * Controller constructor.
     */
    function __construct()
	{
		$this->viewInstance = new View();
		$this->requestInstance = new Request();
		$this->sessionInstance = new Session();
	}

    /**
     * @return \App\View\View
     */
    protected function getView()
    {
        return $this->viewInstance;
    }

    /**
     * @return \App\Controller\Request
     */
    protected function getRequest()
    {
        return $this->requestInstance;
    }

    protected function getSession()
    {
        return $this->sessionInstance;
    }

    /**
     * @param \App\Controller\string $view
     * @param null                   $data
     */
    protected function render(string $view, $data = null)
	{
		if ($data != null) {
			$this->viewInstance->setPageData($data);
		}

		$this->viewInstance->renderPage($view);
	}
}

