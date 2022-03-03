<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;
use App\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, "home"]);
$app->router->get('/contact', [HomeController::class, "contact"]);
$app->router->post('/contact', [HomeController::class, "handleContact"]);

$app->run();
?>
