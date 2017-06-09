<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 08-06-2017
 * Time: 19:21
 */

namespace App\Middleware;


use Monolog\Logger;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Handlers\Error;

/**
 * Class ErrorLogger
 * @package App\Middleware
 */
class ErrorLogger extends Error {
	protected $log;

	/**
	 * ErrorLogger constructor.
	 *
	 * @param bool   $displayErrorDetails
	 * @param Logger $log
	 */
	public function __construct($displayErrorDetails = false, Logger $log) {
		parent::__construct($displayErrorDetails);
		$this->log = $log;
	}

	/**
	 * @param ServerRequestInterface $request
	 * @param ResponseInterface      $response
	 * @param \Exception             $exception
	 *
	 * @return ResponseInterface
	 */
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, \Exception $exception) {
		$this->log->critical($exception->getMessage());
		return parent::__invoke($request, $response, $exception);
	}

}