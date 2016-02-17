<?php
require 'vendor/autoload.php';

// Create and configure Slim app
$app = new \Slim\App();

// Define app routes
$app->get('/', function ($request, $response, $args) {
    $response->write("Welcome to Slim!");
    return $response;
});

// Run app
$app->run();
