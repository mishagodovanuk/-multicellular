<?php
namespace App\Controller;

use App\View\View;
use App\Controller\Request;
use App\Controller\Session;
use App\Controller\Redirect;
use App\Controller\Url;

/**
 * Class Controller
 *
 * @package App\Controller
 */
class Controller
{
    /**
     * View.
     *
     * @var \App\View\View
     */
    private $viewInstance;

    /**
     * Request.
     *
     * @var \App\Controller\Request
     */
    private $requestInstance;

    /**
     * Session.
     *
     * @var \App\Controller\Session
     */
    private $sessionInstance;

    private $urlInstance;

    private $redirectInstance;

    /**
     * Controller constructor.
     */
    function __construct()
	{
		$this->viewInstance = new View();
		$this->requestInstance = new Request();
		$this->sessionInstance = new Session();
		$this->urlInstance = new Url();
		$this->redirectInstance = new Redirect();
	}

    /**
     * Get view.
     *
     * @return \App\View\View
     */
    protected function getView()
    {
        return $this->viewInstance;
    }

    /**
     * Get request.
     *
     * @return \App\Controller\Request
     */
    protected function getRequest()
    {
        return $this->requestInstance;
    }

    /**
     * Get session.
     *
     * @return \App\Controller\Session
     */
    protected function getSession()
    {
        return $this->sessionInstance;
    }

    protected function getUrl()
    {
        return $this->urlInstance;
    }

    protected function getRedirect()
    {
        return $this->redirectInstance;
    }

    /**
     * Render.
     *
     * @param string $view
     * @param $data = null
     */
    protected function render(string $view, $data = null)
	{
		if ($data != null) {
			$this->viewInstance->setPageData($data);
		}
		$this->viewInstance->renderPage($view);
	}
}
