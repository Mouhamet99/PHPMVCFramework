<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\core\Application;

$app = new Application();

$app->router->get('/', 'home');

$app->router->get('/contact',"contact");

$app->run();
?>
