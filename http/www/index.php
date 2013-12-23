<?php

include __DIR__ . "/../vendor/autoload.php";

use Symfony\Component\HttpFoundation\Response;
use G\Silex\Application;

$app = new Application([
    'debug' => true
]);

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views',
));

$app->get('/', function () use ($app) {
    return $app->render('home.twig');
});

$app->get('/emit/{id}/{message}', function ($id, $message) use ($app) {
    $s = curl_init();
    curl_setopt($s, CURLOPT_URL, "http://localhost:26300/emit/{$id}/{$message}");
    curl_setopt($s, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($s);
    $status = curl_getinfo($s, CURLINFO_HTTP_CODE);
    curl_close($s);

    return new Response($content, $status);
});

$app->run();