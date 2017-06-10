<?php
namespace App\Model;

use Slim\Container;

class invTypes {

	/**
	 * @var Container
	 */
	protected $container;

	/**
	 * @param Container $container
	 */
	public function __construct(Container $container) {
		$this->container = $container;
		$this->db = $container->get("db");
	}

	/**
	 * @param int $graphicID
	 */
	public function getAllByGraphicID(int $graphicID) {
		return $this->db->query("SELECT * FROM invTypes WHERE graphicID = :graphicID", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getAllByGroupID(int $groupID) {
		return $this->db->query("SELECT * FROM invTypes WHERE groupID = :groupID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getAllByIconID(int $iconID) {
		return $this->db->query("SELECT * FROM invTypes WHERE iconID = :iconID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getAllByMarketGroupID(int $marketGroupID) {
		return $this->db->query("SELECT * FROM invTypes WHERE marketGroupID = :marketGroupID", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getAllByRaceID(int $raceID) {
		return $this->db->query("SELECT * FROM invTypes WHERE raceID = :raceID", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getAllBySoundID(int $soundID) {
		return $this->db->query("SELECT * FROM invTypes WHERE soundID = :soundID", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getAllByTypeID(int $typeID) {
		return $this->db->query("SELECT * FROM invTypes WHERE typeID = :typeID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getAllByTypeName(string $typeName) {
		return $this->db->query("SELECT * FROM invTypes WHERE typeName = :typeName", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getBasePriceByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT basePrice FROM invTypes WHERE graphicID = :graphicID", "basePrice", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getBasePriceByGroupID(int $groupID) {
		return $this->db->queryField("SELECT basePrice FROM invTypes WHERE groupID = :groupID", "basePrice", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getBasePriceByIconID(int $iconID) {
		return $this->db->queryField("SELECT basePrice FROM invTypes WHERE iconID = :iconID", "basePrice", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getBasePriceByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT basePrice FROM invTypes WHERE marketGroupID = :marketGroupID", "basePrice", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getBasePriceByRaceID(int $raceID) {
		return $this->db->queryField("SELECT basePrice FROM invTypes WHERE raceID = :raceID", "basePrice", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getBasePriceBySoundID(int $soundID) {
		return $this->db->queryField("SELECT basePrice FROM invTypes WHERE soundID = :soundID", "basePrice", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getBasePriceByTypeID(int $typeID) {
		return $this->db->queryField("SELECT basePrice FROM invTypes WHERE typeID = :typeID", "basePrice", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getBasePriceByTypeName(string $typeName) {
		return $this->db->queryField("SELECT basePrice FROM invTypes WHERE typeName = :typeName", "basePrice", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getCapacityByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT capacity FROM invTypes WHERE graphicID = :graphicID", "capacity", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getCapacityByGroupID(int $groupID) {
		return $this->db->queryField("SELECT capacity FROM invTypes WHERE groupID = :groupID", "capacity", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getCapacityByIconID(int $iconID) {
		return $this->db->queryField("SELECT capacity FROM invTypes WHERE iconID = :iconID", "capacity", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getCapacityByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT capacity FROM invTypes WHERE marketGroupID = :marketGroupID", "capacity", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getCapacityByRaceID(int $raceID) {
		return $this->db->queryField("SELECT capacity FROM invTypes WHERE raceID = :raceID", "capacity", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getCapacityBySoundID(int $soundID) {
		return $this->db->queryField("SELECT capacity FROM invTypes WHERE soundID = :soundID", "capacity", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getCapacityByTypeID(int $typeID) {
		return $this->db->queryField("SELECT capacity FROM invTypes WHERE typeID = :typeID", "capacity", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getCapacityByTypeName(string $typeName) {
		return $this->db->queryField("SELECT capacity FROM invTypes WHERE typeName = :typeName", "capacity", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getDescriptionByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT description FROM invTypes WHERE graphicID = :graphicID", "description", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getDescriptionByGroupID(int $groupID) {
		return $this->db->queryField("SELECT description FROM invTypes WHERE groupID = :groupID", "description", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getDescriptionByIconID(int $iconID) {
		return $this->db->queryField("SELECT description FROM invTypes WHERE iconID = :iconID", "description", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getDescriptionByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT description FROM invTypes WHERE marketGroupID = :marketGroupID", "description", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getDescriptionByRaceID(int $raceID) {
		return $this->db->queryField("SELECT description FROM invTypes WHERE raceID = :raceID", "description", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getDescriptionBySoundID(int $soundID) {
		return $this->db->queryField("SELECT description FROM invTypes WHERE soundID = :soundID", "description", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getDescriptionByTypeID(int $typeID) {
		return $this->db->queryField("SELECT description FROM invTypes WHERE typeID = :typeID", "description", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getDescriptionByTypeName(string $typeName) {
		return $this->db->queryField("SELECT description FROM invTypes WHERE typeName = :typeName", "description", array(":typeName" => $typeName));
	}

	/**
	 * @param int $groupID
	 */
	public function getGraphicIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT graphicID FROM invTypes WHERE groupID = :groupID", "graphicID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getGraphicIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT graphicID FROM invTypes WHERE iconID = :iconID", "graphicID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getGraphicIDByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT graphicID FROM invTypes WHERE marketGroupID = :marketGroupID", "graphicID", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getGraphicIDByRaceID(int $raceID) {
		return $this->db->queryField("SELECT graphicID FROM invTypes WHERE raceID = :raceID", "graphicID", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getGraphicIDBySoundID(int $soundID) {
		return $this->db->queryField("SELECT graphicID FROM invTypes WHERE soundID = :soundID", "graphicID", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getGraphicIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT graphicID FROM invTypes WHERE typeID = :typeID", "graphicID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getGraphicIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT graphicID FROM invTypes WHERE typeName = :typeName", "graphicID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getGroupIDByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT groupID FROM invTypes WHERE graphicID = :graphicID", "groupID", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $iconID
	 */
	public function getGroupIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT groupID FROM invTypes WHERE iconID = :iconID", "groupID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getGroupIDByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT groupID FROM invTypes WHERE marketGroupID = :marketGroupID", "groupID", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getGroupIDByRaceID(int $raceID) {
		return $this->db->queryField("SELECT groupID FROM invTypes WHERE raceID = :raceID", "groupID", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getGroupIDBySoundID(int $soundID) {
		return $this->db->queryField("SELECT groupID FROM invTypes WHERE soundID = :soundID", "groupID", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getGroupIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT groupID FROM invTypes WHERE typeID = :typeID", "groupID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getGroupIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT groupID FROM invTypes WHERE typeName = :typeName", "groupID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getIconIDByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT iconID FROM invTypes WHERE graphicID = :graphicID", "iconID", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getIconIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT iconID FROM invTypes WHERE groupID = :groupID", "iconID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getIconIDByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT iconID FROM invTypes WHERE marketGroupID = :marketGroupID", "iconID", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getIconIDByRaceID(int $raceID) {
		return $this->db->queryField("SELECT iconID FROM invTypes WHERE raceID = :raceID", "iconID", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getIconIDBySoundID(int $soundID) {
		return $this->db->queryField("SELECT iconID FROM invTypes WHERE soundID = :soundID", "iconID", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getIconIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT iconID FROM invTypes WHERE typeID = :typeID", "iconID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getIconIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT iconID FROM invTypes WHERE typeName = :typeName", "iconID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getMarketGroupIDByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT marketGroupID FROM invTypes WHERE graphicID = :graphicID", "marketGroupID", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getMarketGroupIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT marketGroupID FROM invTypes WHERE groupID = :groupID", "marketGroupID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getMarketGroupIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT marketGroupID FROM invTypes WHERE iconID = :iconID", "marketGroupID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $raceID
	 */
	public function getMarketGroupIDByRaceID(int $raceID) {
		return $this->db->queryField("SELECT marketGroupID FROM invTypes WHERE raceID = :raceID", "marketGroupID", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getMarketGroupIDBySoundID(int $soundID) {
		return $this->db->queryField("SELECT marketGroupID FROM invTypes WHERE soundID = :soundID", "marketGroupID", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getMarketGroupIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT marketGroupID FROM invTypes WHERE typeID = :typeID", "marketGroupID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getMarketGroupIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT marketGroupID FROM invTypes WHERE typeName = :typeName", "marketGroupID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getMassByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT mass FROM invTypes WHERE graphicID = :graphicID", "mass", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getMassByGroupID(int $groupID) {
		return $this->db->queryField("SELECT mass FROM invTypes WHERE groupID = :groupID", "mass", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getMassByIconID(int $iconID) {
		return $this->db->queryField("SELECT mass FROM invTypes WHERE iconID = :iconID", "mass", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getMassByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT mass FROM invTypes WHERE marketGroupID = :marketGroupID", "mass", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getMassByRaceID(int $raceID) {
		return $this->db->queryField("SELECT mass FROM invTypes WHERE raceID = :raceID", "mass", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getMassBySoundID(int $soundID) {
		return $this->db->queryField("SELECT mass FROM invTypes WHERE soundID = :soundID", "mass", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getMassByTypeID(int $typeID) {
		return $this->db->queryField("SELECT mass FROM invTypes WHERE typeID = :typeID", "mass", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getMassByTypeName(string $typeName) {
		return $this->db->queryField("SELECT mass FROM invTypes WHERE typeName = :typeName", "mass", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getPortionSizeByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT portionSize FROM invTypes WHERE graphicID = :graphicID", "portionSize", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getPortionSizeByGroupID(int $groupID) {
		return $this->db->queryField("SELECT portionSize FROM invTypes WHERE groupID = :groupID", "portionSize", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getPortionSizeByIconID(int $iconID) {
		return $this->db->queryField("SELECT portionSize FROM invTypes WHERE iconID = :iconID", "portionSize", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getPortionSizeByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT portionSize FROM invTypes WHERE marketGroupID = :marketGroupID", "portionSize", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getPortionSizeByRaceID(int $raceID) {
		return $this->db->queryField("SELECT portionSize FROM invTypes WHERE raceID = :raceID", "portionSize", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getPortionSizeBySoundID(int $soundID) {
		return $this->db->queryField("SELECT portionSize FROM invTypes WHERE soundID = :soundID", "portionSize", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getPortionSizeByTypeID(int $typeID) {
		return $this->db->queryField("SELECT portionSize FROM invTypes WHERE typeID = :typeID", "portionSize", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getPortionSizeByTypeName(string $typeName) {
		return $this->db->queryField("SELECT portionSize FROM invTypes WHERE typeName = :typeName", "portionSize", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getPublishedByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT published FROM invTypes WHERE graphicID = :graphicID", "published", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getPublishedByGroupID(int $groupID) {
		return $this->db->queryField("SELECT published FROM invTypes WHERE groupID = :groupID", "published", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getPublishedByIconID(int $iconID) {
		return $this->db->queryField("SELECT published FROM invTypes WHERE iconID = :iconID", "published", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getPublishedByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT published FROM invTypes WHERE marketGroupID = :marketGroupID", "published", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getPublishedByRaceID(int $raceID) {
		return $this->db->queryField("SELECT published FROM invTypes WHERE raceID = :raceID", "published", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getPublishedBySoundID(int $soundID) {
		return $this->db->queryField("SELECT published FROM invTypes WHERE soundID = :soundID", "published", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getPublishedByTypeID(int $typeID) {
		return $this->db->queryField("SELECT published FROM invTypes WHERE typeID = :typeID", "published", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getPublishedByTypeName(string $typeName) {
		return $this->db->queryField("SELECT published FROM invTypes WHERE typeName = :typeName", "published", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getRaceIDByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT raceID FROM invTypes WHERE graphicID = :graphicID", "raceID", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getRaceIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT raceID FROM invTypes WHERE groupID = :groupID", "raceID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getRaceIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT raceID FROM invTypes WHERE iconID = :iconID", "raceID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getRaceIDByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT raceID FROM invTypes WHERE marketGroupID = :marketGroupID", "raceID", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $soundID
	 */
	public function getRaceIDBySoundID(int $soundID) {
		return $this->db->queryField("SELECT raceID FROM invTypes WHERE soundID = :soundID", "raceID", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getRaceIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT raceID FROM invTypes WHERE typeID = :typeID", "raceID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getRaceIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT raceID FROM invTypes WHERE typeName = :typeName", "raceID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getSoundIDByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT soundID FROM invTypes WHERE graphicID = :graphicID", "soundID", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getSoundIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT soundID FROM invTypes WHERE groupID = :groupID", "soundID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getSoundIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT soundID FROM invTypes WHERE iconID = :iconID", "soundID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getSoundIDByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT soundID FROM invTypes WHERE marketGroupID = :marketGroupID", "soundID", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getSoundIDByRaceID(int $raceID) {
		return $this->db->queryField("SELECT soundID FROM invTypes WHERE raceID = :raceID", "soundID", array(":raceID" => $raceID));
	}

	/**
	 * @param int $typeID
	 */
	public function getSoundIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT soundID FROM invTypes WHERE typeID = :typeID", "soundID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getSoundIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT soundID FROM invTypes WHERE typeName = :typeName", "soundID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getTypeIDByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT typeID FROM invTypes WHERE graphicID = :graphicID", "typeID", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getTypeIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT typeID FROM invTypes WHERE groupID = :groupID", "typeID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getTypeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT typeID FROM invTypes WHERE iconID = :iconID", "typeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getTypeIDByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT typeID FROM invTypes WHERE marketGroupID = :marketGroupID", "typeID", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getTypeIDByRaceID(int $raceID) {
		return $this->db->queryField("SELECT typeID FROM invTypes WHERE raceID = :raceID", "typeID", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getTypeIDBySoundID(int $soundID) {
		return $this->db->queryField("SELECT typeID FROM invTypes WHERE soundID = :soundID", "typeID", array(":soundID" => $soundID));
	}

	/**
	 * @param string $typeName
	 */
	public function getTypeIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT typeID FROM invTypes WHERE typeName = :typeName", "typeID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $graphicID
	 */
	public function getTypeNameByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT typeName FROM invTypes WHERE graphicID = :graphicID", "typeName", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getTypeNameByGroupID(int $groupID) {
		return $this->db->queryField("SELECT typeName FROM invTypes WHERE groupID = :groupID", "typeName", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getTypeNameByIconID(int $iconID) {
		return $this->db->queryField("SELECT typeName FROM invTypes WHERE iconID = :iconID", "typeName", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getTypeNameByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT typeName FROM invTypes WHERE marketGroupID = :marketGroupID", "typeName", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getTypeNameByRaceID(int $raceID) {
		return $this->db->queryField("SELECT typeName FROM invTypes WHERE raceID = :raceID", "typeName", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getTypeNameBySoundID(int $soundID) {
		return $this->db->queryField("SELECT typeName FROM invTypes WHERE soundID = :soundID", "typeName", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getTypeNameByTypeID(int $typeID) {
		return $this->db->queryField("SELECT typeName FROM invTypes WHERE typeID = :typeID", "typeName", array(":typeID" => $typeID));
	}

	/**
	 * @param int $graphicID
	 */
	public function getVolumeByGraphicID(int $graphicID) {
		return $this->db->queryField("SELECT volume FROM invTypes WHERE graphicID = :graphicID", "volume", array(":graphicID" => $graphicID));
	}

	/**
	 * @param int $groupID
	 */
	public function getVolumeByGroupID(int $groupID) {
		return $this->db->queryField("SELECT volume FROM invTypes WHERE groupID = :groupID", "volume", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getVolumeByIconID(int $iconID) {
		return $this->db->queryField("SELECT volume FROM invTypes WHERE iconID = :iconID", "volume", array(":iconID" => $iconID));
	}

	/**
	 * @param int $marketGroupID
	 */
	public function getVolumeByMarketGroupID(int $marketGroupID) {
		return $this->db->queryField("SELECT volume FROM invTypes WHERE marketGroupID = :marketGroupID", "volume", array(":marketGroupID" => $marketGroupID));
	}

	/**
	 * @param int $raceID
	 */
	public function getVolumeByRaceID(int $raceID) {
		return $this->db->queryField("SELECT volume FROM invTypes WHERE raceID = :raceID", "volume", array(":raceID" => $raceID));
	}

	/**
	 * @param int $soundID
	 */
	public function getVolumeBySoundID(int $soundID) {
		return $this->db->queryField("SELECT volume FROM invTypes WHERE soundID = :soundID", "volume", array(":soundID" => $soundID));
	}

	/**
	 * @param int $typeID
	 */
	public function getVolumeByTypeID(int $typeID) {
		return $this->db->queryField("SELECT volume FROM invTypes WHERE typeID = :typeID", "volume", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getVolumeByTypeName(string $typeName) {
		return $this->db->queryField("SELECT volume FROM invTypes WHERE typeName = :typeName", "volume", array(":typeName" => $typeName));
	}
}