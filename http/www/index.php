<?php

include __DIR__ . "/../vendor/autoload.php";

use G\Silex\Application;

$app = new Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->get('/', function () use ($app) {
    return $app->render('home.twig');
});

$app->run();