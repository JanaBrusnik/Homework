<?php
define ('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
require_once(ROOT.DS.'lib'.DS.'init.php');

/*
$router = new Router($_SERVER['REQUEST_URI']);

echo '<pre';

print_r('Router: '.$router->getRoute().PHP_EOL);
print_r('Language: '.$router->getLanguage().PHP_EOL);
print_r('Controller: '.$router->getController().PHP_EOL);
print_r('Action is called: '.$router->getMethodPrefix().$router->getAction().PHP_EOL);
echo'Params';
print_r($router->getParams().PHP_EOL);
*/

App::run($_SERVER['REQUEST_URI']);