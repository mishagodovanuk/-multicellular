<?php
namespace App\View;

/**
 * Class View
 *
 * @package App\View
 */
class View
{
    /**
     * @var
     */
    protected $_classInstance;

    /**
     * @var
     */
    private $_pageData;

    /**
     * @var
     */
    private $_viewPage;

    /**
     * @var
     */
    private $_pageTitle;

    /**
     * @param $data
     */
    public function setPageData($data)
	{
		$this->_pageData = $data;
	}

    /**
     * @return mixed
     */
    protected function getPageData()
    {
        return $this->_pageData;
    }

    /**
     *
     */
    private function getBody()
	{
		require_once $_SERVER['DOCUMENT_ROOT'] . '/View/Pages/' . $GLOBALS['controller'] . '/' . $this->_viewPage . '.php';
	}

    /**
     * @param \App\View\string $view
     */
    public  function renderPage(string $view)
	{
		$this->_viewPage = $view;

		require_once $_SERVER['DOCUMENT_ROOT'] . '/View/Templates/' . $GLOBALS['controller'] . '.php';
	}

    /**
     * @param \App\View\string $title
     */
    public function setTitle(string $title)
    {
        $this->_pageTitle = $title;
    }

    /**
     * @return string
     */
    protected function getTitle()
    {
        if ($this->_pageTitle === null) {
            $this->_pageTitle = $this->_viewPage;
        }

        return (string)$this->_pageTitle;
    }
}
