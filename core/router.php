<?php
namespace Core;

/**
 * Class Router.
 *
 * @package Core
 */
class Router
{
    /**
     * Exploded url.
     *
     * @var array
     */
    protected $_explodedUrl;

    /**
     * Run routing.
     */
    public  function routeStart()
	{
		$this->router();
	}

    /**
     * Router.
     */
    protected function router()
	{
		$this->urlExplode();
		$this->setGlobals();
		$this->getAction();
	}

    /**
     * Run action.
     */
    protected function getAction()
	{
		if (class_exists('\User\Controller\\' . ucfirst($this->_explodedUrl['controller']))) {
			$className = '\User\Controller\\' . ucfirst($this->_explodedUrl['controller']);
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
     * Url Exploder.
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
			} else if (strstr($explodedArray[2], '?')) {
                $action = explode('?', $explodedArray[2]);
			    $explodedArray['action'] = $action[0];
            } else {
				$explodedArray['action'] = 'index';
				unset($explodedArray[2]);
			}
		}

		$this->_explodedUrl = $explodedArray;
	}

    /**
     *Set global variables.
     */
    protected function setGlobals()
	{
		$GLOBALS['controller'] = ucfirst($this->_explodedUrl['controller']);
		$GLOBALS['action'] = ucfirst($this->_explodedUrl['action']);
	}
}
