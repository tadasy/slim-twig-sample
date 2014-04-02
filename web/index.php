<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Slim;
use Slim\Views\Twig as Twig;

$app = new Slim(array(
    'view' => new Twig(),
    'templates.path' => __DIR__ . '/../templates'
));

$app->get('/:name', function($name) use ($app) {
    $app->render('index.html.twig', ['name' => $name]);
});
$app->run();
