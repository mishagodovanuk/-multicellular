<?php
namespace App\Controller;

use App\View\View;

/*
* Class Controller
*/
class Controller
{
	// @var 
	private $viewInstance;

	function __construct()
	{
		$this->viewInstance = new View();
	}

	protected function render(string $view)
	{
		$this->viewInstance->renderPage($view);
	}
}

