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
		$controllers = glob(SITE_ROOT . '/Controller/' . '*.php');
		foreach ($controllers as $controller) {
			include_once $controller;
		}
	}

    /**
     *
     */
    protected function loadCoreClasses()
	{
		foreach (glob(CORE_ROOT . '/app/*', GLOB_ONLYDIR) as $dir) {

			foreach (glob($dir . '/*.php') as $d) {
				include_once $d;
			}
		}
	}
}
