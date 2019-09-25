<?php
namespace Core;

/**
 * Class Autoload
 *
 * @package Core
 */
abstract class Autoload
{
    /**
     *
     */
    public function load()
	{
		self::loadCoreClasses();
		self::loadControllers();
	}

    /**
     *
     */
    protected function loadControllers()
	{
		$controllers = glob($_SERVER['DOCUMENT_ROOT'] . '/Controller/' . '*.php');
		foreach ($controllers as $controller) {
			include_once $controller;
		}
	}

    /**
     *
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
