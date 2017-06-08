<?php

namespace PHPSTORM_META {

	use App\Lib\Database;
	use App\Lib\DatabaseAsync;
	use App\Middleware\Controller;
	use Monolog\Logger;
	use Slim\Views\Twig;
	use Symfony\Component\Cache\Adapter\AbstractAdapter;

	$STATIC_METHOD_TYPES = array(
		\Psr\Container\ContainerInterface::get("") => array(
			"controller" instanceof Controller,
			"view" instanceof Twig,
			"logger" instanceof Logger,
			"cache" instanceof AbstractAdapter,
			"dbAsync" instanceof DatabaseAsync,
			"db" instanceof Database
		)
	);
}