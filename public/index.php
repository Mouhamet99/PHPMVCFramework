<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');

$app->router->get('/contact',"contact");

$app->run();
?>
