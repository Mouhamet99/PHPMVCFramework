<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\core\Application;

$app = new Application();

$app->router->get('/', function () {
    return "Hello World";
});

$app->router->get('/contact', function () {
    return "Contact";
});

$app->run();
?>
</body>
</html>
