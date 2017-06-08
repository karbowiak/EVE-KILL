<?php
namespace App\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class APIAuthentication
 * @package App\Middleware
 */
class APIAuthentication {
	/**
	 * @param Request  $request
	 * @param Response $response
	 * @param          $next
	 *
	 * @return Response
	 */
	public function __invoke(Request $request, Response $response, $next) {
		$path = $request->getUri()->getPath();
		if(stristr($path, "/api/authed/")) {
			$headers = $request->getHeaders();
			$apiToken = isset($headers["Authorization"]) ? $headers["Authorization"] : false;

			if($apiToken === false) {
				// There is no token, ohnoes...
			}

			// Lets verify that the token is valid (Lookup the characterID that the Token is associated with)
			// If the characterID doesn't exist, or is 0, throw a new error!
			// However if the token is correct, then don't do anything - they've earned their passage!
		}
		return $next($request, $response);
	}
}