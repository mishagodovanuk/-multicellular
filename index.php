<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/router.php';

use Core\Autoload;
use Core\Router;

Autoload::load();
$_router = new Router;
$_router->routeStart();
