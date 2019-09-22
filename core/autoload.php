<?php
namespace Core;

/*
* Class Autoload
*/

abstract class Autoload 
{
	/*
	* Function load
	*/
	public function load()
	{
		self::loadCoreClasses();
		self::loadControllers();
	}

	/*
	* Function loadControllers
	*/
	protected function loadControllers()
	{
		$controllers = glob($_SERVER['DOCUMENT_ROOT'] . '/Controller/' . '*.php');
		foreach ($controllers as $controller) {
			include_once $controller;
		}
	}

	/*
	* Function loadCoreClasses
	*/
	protected function loadCoreClasses()
	{
		foreach (glob($_SERVER['DOCUMENT_ROOT'] . '/core/app/*', GLOB_ONLYDIR) as $dir) {

			foreach (glob($dir . '/*.php') as $d) {
				include_once $d;
			}
		}
	}
}
