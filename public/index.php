<?php

require '../vendor/autoload.php';

$config = require_once __DIR__ . '/../config.php';

use Slim\Extras\Views\Twig;

// Prepare app
$app = new Slim\Slim($config['slim']);

// Prepare view
Twig::$twigOptions = $config['twig'];
$app->view(new Twig());

// Define routes
$app->get('/', function () use ($app) {
    $app->render('index.html');
});

// Run app
$app->run();
