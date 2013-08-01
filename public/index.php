<?php

require '../vendor/autoload.php';

$config = require_once __DIR__ . '/../config.php';

use Slim\Views\Twig;
use Slim\Views\TwigExtension;

// Prepare app
$app = new Slim\Slim($config['slim']);

// Prepare view
$app->view(new Twig());
$app->view->parserOptions = $config['twig'];
$app->view->parserExtensions = array(
    new TwigExtension()
);

// Define routes
$app->get('/', function () use ($app) {
    $app->render('index.html');
});

// Run app
$app->run();
