<?php
// Show render time
$app->add(function (Psr\Http\Message\ServerRequestInterface $request, Psr\Http\Message\ResponseInterface $response, $next) {
	$response = $next($request, $response);
	$response->getBody()->write("<!-- Time To Render: " . (microtime(true) - START_TIME) . " -->");
	return $response;
});

$app->add(new \App\Middleware\APIAuthentication());