<?php

namespace App\Controller;

use App\Middleware\Controller;
use Slim\Http\Response;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends Controller {

	/**
	 * @param array|string $name
	 *
	 * @return Response
	 * @throws \Psr\Container\ContainerExceptionInterface
	 * @throws \Psr\Container\NotFoundExceptionInterface
	 */
	public function index(string $name = null): Response {
		//var_dump($this->dbAsync->executeQuery("select", "SELECT * FROM account_api_key_info_characters"));
		//var_dump($this->dbAsync->getQuery("select"));
		return $this->render("home.twig", array("name" => $name));
	}
}