<?php

namespace App\Middleware;

use App\Lib\Database;
use App\Lib\DatabaseAsync;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\UriInterface;
use Slim\App;
use Slim\Http\Body;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;
use Symfony\Component\Cache\Adapter\AbstractAdapter;

/**
 * Class Controller
 * @package App\Middleware
 */
abstract class Controller {
	// Optional properties
	/**
	 * @var App
	 */
	protected $app;
	/**
	 * @var Request
	 */
	protected $request;
	/**
	 * @var Response
	 */
	protected $response;
	/**
	 * @var ContainerInterface
	 */
	protected $container;
	/**
	 * @var AbstractAdapter
	 */
	protected $cache;
	/**
	 * @var Database
	 */
	protected $db;
	/**
	 * @var DatabaseAsync
	 */
	protected $dbAsync;

	/**
	 * @param App $app
	 *
	 * @throws \Psr\Container\ContainerExceptionInterface
	 * @throws \Psr\Container\NotFoundExceptionInterface
	 */
	public function __construct(App $app) {
		$this->app = $app;
		$this->container = $app->getContainer();
		$this->cache = $this->container->get("cache");
		$this->db = $this->container->get("db");
		$this->dbAsync = $this->container->get("dbAsync");
	}

	/**
	 * This method allows use to return a callable that calls the action for
	 * the route.
	 *
	 * @param $actionName
	 *
	 * @return \Closure
	 * @internal param string $actionName Name of the action method to call
	 */
	public function __invoke(string $actionName) {
		$app = $this->app;
		$controller = $this;

		$callable = function ($request, $response, $args) use ($app, $controller, $actionName) {
			if(method_exists($controller, 'setRequest')) {
				$controller->setRequest($request);
			}
			if(method_exists($controller, 'setResponse')) {
				$controller->setResponse($response);
			}
			if(method_exists($controller, 'init')) {
				$controller->init();
			}

			// store the name of the controller and action so we can assert during tests
			$controllerName = get_class($controller); // eg. CrSrc\Controller\Admin\ArticlesController
			$controllerName = strtolower($controllerName); // eg. crsrc\controller\admin\articlescontroller
			$controllerNameParts = explode('\\', $controllerName);
			$controllerName = array_pop($controllerNameParts); // eg. articlescontroller
			preg_match('/(.*)controller$/', $controllerName, $result); // eg. articles?
			$controllerName = $result[1];

			// these values will be useful when testing, but not included with the
			// Slim\Http\Response. Instead use SlimMvc\Http\Response
			if(method_exists($response, 'setControllerName')) {
				$response->setControllerName($controllerName);
			}
			if(method_exists($response, 'setActionName')) {
				$response->setActionName($actionName);
			}

			return call_user_func_array(array( $controller, $actionName ), $args);
		};

		return $callable;
	}

	/**
	 * @param $containerItem
	 *
	 * @return mixed
	 * @throws \Psr\Container\ContainerExceptionInterface
	 * @throws \Psr\Container\NotFoundExceptionInterface
	 */
	public function __get(string $containerItem) {
		return $this->container->get($containerItem);
	}

	/**
	 * @param $request
	 */
	public function setRequest(Request $request) {
		$this->request = $request;
	}

	/**
	 * @param $response
	 */
	public function setResponse(Response $response) {
		$this->response = $response;
	}

	/**
	 * Render to HTML
	 *
	 * @param string $file Name of the template/ view to render
	 * @param array  $args Additional variables to pass to the view
	 *
	 * @return Response
	 * @throws \Psr\Container\ContainerExceptionInterface
	 * @throws \Psr\Container\NotFoundExceptionInterface
	 * @internal param $Response ?
	 *
	 */
	protected function render(string $file, array $args = array()): Response {
		/** @var Twig $view */
		$view = $this->container->get("view");

		return $view->render($this->response, $file, $args);
	}

	/**
	 * Render to JSON
	 *
	 * @param array $args
	 * @param int   $cacheTime
	 *
	 * @return Response
	 */
	protected function json(array $args = array(), $cacheTime = 30): Response {
		$resp = new Response(200);
		$resp
			->withHeader("Content-Type", "application/json; charset=utf-8")
			->withAddedHeader("Access-Control-Allow-Origin", "*")
			->withAddedHeader("Access-Control-Allow-Methods", "*")
			->withAddedHeader("Expires:", gmdate("D, d M Y H:i:s", time() + $cacheTime) . " GMT")
			->withAddedHeader("Cache-Control", "public, max-age={$cacheTime}, proxy-revalidate");

		$body = new Body(fopen("php://temp", "r+"));
		$body->write(json_encode($args, JSON_NUMERIC_CHECK));

		return $resp->withBody($body);
	}

	/**
	 * Return true if XHR request
	 */
	protected function isXhr(): bool {
		return $this->request->isXhr();
	}

	/**
	 * Get the POST params
	 */
	protected function getPost(): array {
		$post = array_diff_key($this->request->getParams(), array_flip(array( '_METHOD', )));

		return $post;
	}

	/**
	 * Get the POST params
	 */
	protected function getQueryParams() {
		return $this->request->getQueryParams();
	}

	/**
	 * Shorthand method to get dependency from container
	 *
	 * @param string $name
	 *
	 * @return mixed|string
	 * @throws \Psr\Container\ContainerExceptionInterface
	 * @throws \Psr\Container\NotFoundExceptionInterface
	 */
	protected function get(string $name): string {
		return $this->app->getContainer()->get($name);
	}

	/**
	 * Redirect.
	 *
	 * Note: This method is not part of the PSR-7 standard.
	 *
	 * This method prepares the response object to return an HTTP Redirect
	 * response to the client.
	 *
	 * @param  string|UriInterface $url    The redirect destination.
	 * @param  int                 $status The redirect HTTP status code.
	 *
	 * @return Controller|Response
	 */
	protected function redirect(string $url, int $status = 302): Response {
		return $this->response->withRedirect($url, $status);
	}

	/**
	 * Pass on the control to another action. Of the same class (for now)
	 *
	 * @param  string $actionName The redirect destination.
	 * @param array   $data
	 *
	 * @return Controller
	 * @internal param string $status The redirect HTTP status code.
	 */
	public function forward(string $actionName, array $data = array()) {
		// update the action name that was last used
		if(method_exists($this->response, 'setActionName')) {
			$this->response->setActionName($actionName);
		}

		return call_user_func_array(array( $this, $actionName ), $data);
	}
}
