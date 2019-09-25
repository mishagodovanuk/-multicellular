<?php
namespace App\Controller;

use App\View\View;
use App\Controller\Request;

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

    private $requestInstance;

    /**
     * Controller constructor.
     */
    function __construct()
	{
		$this->viewInstance = new View();
		$this->requestInstance = new Request();
	}

    /**
     * @return \App\View\View
     */
    protected function getView()
    {
        return $this->viewInstance;
    }

    protected function getRequest()
    {
        return $this->requestInstance;
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

