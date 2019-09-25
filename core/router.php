<?php
namespace Core;

/**
 * Class Router
 *
 * @package Core
 */
class Router
{
    /**
     * @var
     */
    protected $_explodedUrl;

    /**
     *
     */
    public  function routeStart()
	{
		$this->router();
	}

    /**
     *
     */
    protected function router()
	{
		$this->urlExplode();
		$this->setGlobals();
		$this->getAction();
	}

    /**
     *
     */
    protected function getAction()
	{
		if (class_exists('\Controller\\' . ucfirst($this->_explodedUrl['controller']))) {
			$className = '\Controller\\' . ucfirst($this->_explodedUrl['controller']);
			$_action = new $className;
			if (method_exists($_action, 'action' . ucfirst($this->_explodedUrl['action']))) {
				$_controllerAction = 'action' . ucfirst($this->_explodedUrl['action']); 
				$_action->$_controllerAction();
			} else { 
				die('Method doesnt exist');
			}
		} else die('Class doesnt exist');
	}

    /**
     *
     */
    protected function urlExplode()
	{
		if ($this->_explodedUrl === null) {
			$explodedArray = explode('/', $_SERVER['REQUEST_URI']);
			unset($explodedArray[0]);
			
			if (array_key_exists(1, $explodedArray) && !empty($explodedArray[1]) && !strstr($explodedArray[1], '?')) {
				$explodedArray['controller'] = $explodedArray[1];
				unset($explodedArray[1]);
			} else {
				$explodedArray['controller'] = 'main';
				unset($explodedArray[1]);
			}

			if (array_key_exists(2, $explodedArray) && !empty($explodedArray[2]) && !strstr($explodedArray[2], '?')) {
				$explodedArray['action'] = $explodedArray[2];
				unset($explodedArray[2]);
			} else {
				$explodedArray['action'] = 'index';
				unset($explodedArray[2]);
			}
		}

		$this->_explodedUrl = $explodedArray;
	}

    /**
     *
     */
    protected function setGlobals()
	{
		$GLOBALS['controller'] = ucfirst($this->_explodedUrl['controller']);
		$GLOBALS['action'] = ucfirst($this->_explodedUrl['action']);
	}
}
