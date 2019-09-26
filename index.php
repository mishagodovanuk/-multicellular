<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('CORE_ROOT', SITE_ROOT . '/core/');

require_once CORE_ROOT . 'autoload.php';
require_once CORE_ROOT . 'router.php';

use Core\Autoload;
use Core\Router;
use App\System\Logger;

Autoload::load();
$_router = new Router;
$_router->routeStart();

Logger::log('mydata');
