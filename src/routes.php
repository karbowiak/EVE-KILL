<?php
// Routes
$app->group("", function() use ($app) {
    $controller = new App\Controller\IndexController($app);
    $app->get("/[{name}]", $controller("index"));
});