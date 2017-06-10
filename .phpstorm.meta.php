<?php

namespace PHPSTORM_META {

	use App\Lib\cURL;
	use App\Lib\Database;
	use App\Lib\DatabaseAsync;
	use App\Middleware\Controller;
	use App\Model\Storage;
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
			"db" instanceof Database,
			"storage" instanceof Storage,
			"curl" instanceof cURL,
			"factions" instanceof App\Model\Factions,
			"corporations" instanceof App\Model\Corporations,
			"characters" instanceof App\Model\Characters,
			"alliances" instanceof App\Model\Alliances,
			"dgmAttributeCategories" instanceof App\Model\CCP\dgmAttributeCategories,
			"dgmAttributeTypes" instanceof App\Model\CCP\dgmAttributeTypes,
			"dgmEffects" instanceof App\Model\CCP\dgmEffects,
			"dgmTypeEffects" instanceof App\Model\CCP\dgmTypeEffects,
			"invFlags" instanceof App\Model\CCP\invFlags,
			"invGroups" instanceof App\Model\CCP\invGroups,
			"invTypes" instanceof App\Model\CCP\invTypes,
			"mapAllCelestials" instanceof App\Model\CCP\mapAllCelestials,
			"mapConstellations" instanceof App\Model\CCP\mapConstellations,
			"mapDenormalize" instanceof App\Model\CCP\mapDenormalize,
			"mapRegions" instanceof App\Model\CCP\mapRegions,
			"mapSolarSystems" instanceof App\Model\CCP\mapSolarSystems
		)
	);
}