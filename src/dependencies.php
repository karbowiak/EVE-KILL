<?php
$container = $app->getContainer();

/**
 * View Renderer
 * @param $c
 *
 * @return \Slim\Views\Twig
 */
$container['view'] = function ($c) {
	$settings = $c->get('settings')['view'];

	$view = new \Slim\Views\Twig($settings["template_path"], $settings["twig"]);

	// Extensions
	$view->addExtension(new \Slim\Views\TwigExtension($c->get("router"), $c->get("request")->getUri()));
	$view->addExtension(new Twig_Extension_Debug());

	return $view;
};

/**
 * Monolog Logger
 *
 * @param $c
 *
 * @return \Monolog\Logger
 */
$container['logger'] = function ($c) {
	$settings = $c->get('settings')['logger'];
	$logger = new Monolog\Logger($settings['name']);
	$logger->pushProcessor(new Monolog\Processor\UidProcessor());
	$logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));

	return $logger;
};

/**
 * @param $c
 *
 * @return \App\Middleware\ErrorLogger
 */
$container["errorHandler"] = function($c) {
	return new \App\Middleware\ErrorLogger($c->get("logger"));
};

/**
 * Symfony Cache
 *
 * @param $c
 *
 * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
 */
$container["cache"] = function ($c) {
	$settings = $c->get("settings")["cache"];
	$cache = new \Symfony\Component\Cache\Adapter\FilesystemAdapter("ek", 3600, $settings["location"]);

	return $cache;
};

/**
 * @param $c
 *
 * @return \App\Lib\DatabaseAsync
 */
$container["dbAsync"] = function($c) {
	$settings = $c->get("settings")["database"];
	$cache = $c->get("cache");
	$log = $c->get("logger");

	return new \App\Lib\DatabaseAsync($cache, $settings, $log);
};

/**
 * @param $c
 *
 * @return \App\Lib\Database
 */
$container["db"] = function ($c) {
	$settings = $c->get("settings")["database"];
	$cache = $c->get("cache");
	$log = $c->get("logger");
	return new \App\Lib\Database($cache, $settings, $log);
};

$container["storage"] = function($c) {
	$db = $c->get("db");
	return new \App\Model\Storage($db);
};

$container["curl"] = function($c) {
	$cache = $c->get("cache");
	return new \App\Lib\cURL($cache);
};

$container["mapSolarSystems"] = function($c) {
	return new App\Model\CCP\mapSolarSystems($c);
};

$container["mapRegions"] = function($c) {
	return new App\Model\CCP\mapRegions($c);
};

$container["mapDenormalize"] = function($c) {
	return new App\Model\CCP\mapDenormalize($c);
};

$container["mapConstellations"] = function($c) {
	return new App\Model\CCP\mapConstellations($c);
};

$container["mapAllCelestials"] = function($c) {
	return new App\Model\CCP\mapAllCelestials($c);
};

$container["invTypes"] = function($c) {
	return new App\Model\CCP\invTypes($c);
};

$container["invGroups"] = function($c) {
	return new App\Model\CCP\invGroups($c);
};

$container["invFlags"] = function($c) {
	return new App\Model\CCP\invFlags($c);
};

$container["dgmTypeEffects"] = function($c) {
	return new App\Model\CCP\dgmTypeEffects($c);
};

$container["dgmTypeAttributes"] = function($c) {
	return new App\Model\CCP\dgmTypeAttributes($c);
};

$container["dgmEffects"] = function($c) {
	return new App\Model\CCP\dgmEffects($c);
};

$container["dgmAttributeTypes"] = function($c) {
	return new App\Model\CCP\dgmAttributeTypes($c);
};

$container["dgmAttributeCategories"] = function($c) {
	return new App\Model\CCP\dgmAttributeCategories($c);
};

$container["alliances"] = function($c) {
	return new App\Model\alliances($c);
};

$container["characters"] = function($c) {
	return new App\Model\characters($c);
};

$container["corporations"] = function($c) {
	return new App\Model\corporations($c);
};

$container["factions"] = function($c) {
	return new App\Model\factions($c);
};