<?php

namespace App\Controller;

use App\Middleware\Controller;
use Slim\Http\Response;

class IndexController extends Controller {

	/**
	 * @param array $name
	 *
	 * @return Response
	 */
	public function index(string $name = null): Response {
		var_dump($this->dbAsync->executeQuery("select", "SELECT * FROM account_api_key_info_characters"));
		var_dump($this->dbAsync->getQuery("select"));
		return $this->render("home.twig", array("name" => $name));
	}
}