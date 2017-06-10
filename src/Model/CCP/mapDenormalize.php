<?php
namespace App\Model\CCP;

use Slim\Container;

class mapDenormalize {

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
	 * @param int $constellationID
	 */
	public function getAllByConstellationID(int $constellationID) {
		return $this->db->query("SELECT * FROM mapDenormalize WHERE constellationID = :constellationID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getAllByGroupID(int $groupID) {
		return $this->db->query("SELECT * FROM mapDenormalize WHERE groupID = :groupID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getAllByItemID(int $itemID) {
		return $this->db->query("SELECT * FROM mapDenormalize WHERE itemID = :itemID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getAllByItemName(string $itemName) {
		return $this->db->query("SELECT * FROM mapDenormalize WHERE itemName = :itemName", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getAllByOrbitID(int $orbitID) {
		return $this->db->query("SELECT * FROM mapDenormalize WHERE orbitID = :orbitID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getAllByRegionID(int $regionID) {
		return $this->db->query("SELECT * FROM mapDenormalize WHERE regionID = :regionID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getAllBySolarSystemID(int $solarSystemID) {
		return $this->db->query("SELECT * FROM mapDenormalize WHERE solarSystemID = :solarSystemID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getAllByTypeID(int $typeID) {
		return $this->db->query("SELECT * FROM mapDenormalize WHERE typeID = :typeID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getCelestialIndexByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT celestialIndex FROM mapDenormalize WHERE constellationID = :constellationID", "celestialIndex", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getCelestialIndexByGroupID(int $groupID) {
		return $this->db->queryField("SELECT celestialIndex FROM mapDenormalize WHERE groupID = :groupID", "celestialIndex", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getCelestialIndexByItemID(int $itemID) {
		return $this->db->queryField("SELECT celestialIndex FROM mapDenormalize WHERE itemID = :itemID", "celestialIndex", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getCelestialIndexByItemName(string $itemName) {
		return $this->db->queryField("SELECT celestialIndex FROM mapDenormalize WHERE itemName = :itemName", "celestialIndex", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getCelestialIndexByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT celestialIndex FROM mapDenormalize WHERE orbitID = :orbitID", "celestialIndex", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getCelestialIndexByRegionID(int $regionID) {
		return $this->db->queryField("SELECT celestialIndex FROM mapDenormalize WHERE regionID = :regionID", "celestialIndex", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getCelestialIndexBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT celestialIndex FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "celestialIndex", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getCelestialIndexByTypeID(int $typeID) {
		return $this->db->queryField("SELECT celestialIndex FROM mapDenormalize WHERE typeID = :typeID", "celestialIndex", array(":typeID" => $typeID));
	}

	/**
	 * @param int $groupID
	 */
	public function getConstellationIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT constellationID FROM mapDenormalize WHERE groupID = :groupID", "constellationID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getConstellationIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT constellationID FROM mapDenormalize WHERE itemID = :itemID", "constellationID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getConstellationIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT constellationID FROM mapDenormalize WHERE itemName = :itemName", "constellationID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getConstellationIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT constellationID FROM mapDenormalize WHERE orbitID = :orbitID", "constellationID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getConstellationIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT constellationID FROM mapDenormalize WHERE regionID = :regionID", "constellationID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getConstellationIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT constellationID FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "constellationID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getConstellationIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT constellationID FROM mapDenormalize WHERE typeID = :typeID", "constellationID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getGroupIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT groupID FROM mapDenormalize WHERE constellationID = :constellationID", "groupID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getGroupIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT groupID FROM mapDenormalize WHERE itemID = :itemID", "groupID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getGroupIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT groupID FROM mapDenormalize WHERE itemName = :itemName", "groupID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getGroupIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT groupID FROM mapDenormalize WHERE orbitID = :orbitID", "groupID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getGroupIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT groupID FROM mapDenormalize WHERE regionID = :regionID", "groupID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getGroupIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT groupID FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "groupID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getGroupIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT groupID FROM mapDenormalize WHERE typeID = :typeID", "groupID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getItemIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT itemID FROM mapDenormalize WHERE constellationID = :constellationID", "itemID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getItemIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT itemID FROM mapDenormalize WHERE groupID = :groupID", "itemID", array(":groupID" => $groupID));
	}

	/**
	 * @param string $itemName
	 */
	public function getItemIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT itemID FROM mapDenormalize WHERE itemName = :itemName", "itemID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getItemIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT itemID FROM mapDenormalize WHERE orbitID = :orbitID", "itemID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getItemIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT itemID FROM mapDenormalize WHERE regionID = :regionID", "itemID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getItemIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT itemID FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "itemID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getItemIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT itemID FROM mapDenormalize WHERE typeID = :typeID", "itemID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getItemNameByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT itemName FROM mapDenormalize WHERE constellationID = :constellationID", "itemName", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getItemNameByGroupID(int $groupID) {
		return $this->db->queryField("SELECT itemName FROM mapDenormalize WHERE groupID = :groupID", "itemName", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getItemNameByItemID(int $itemID) {
		return $this->db->queryField("SELECT itemName FROM mapDenormalize WHERE itemID = :itemID", "itemName", array(":itemID" => $itemID));
	}

	/**
	 * @param int $orbitID
	 */
	public function getItemNameByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT itemName FROM mapDenormalize WHERE orbitID = :orbitID", "itemName", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getItemNameByRegionID(int $regionID) {
		return $this->db->queryField("SELECT itemName FROM mapDenormalize WHERE regionID = :regionID", "itemName", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getItemNameBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT itemName FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "itemName", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getItemNameByTypeID(int $typeID) {
		return $this->db->queryField("SELECT itemName FROM mapDenormalize WHERE typeID = :typeID", "itemName", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getOrbitIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT orbitID FROM mapDenormalize WHERE constellationID = :constellationID", "orbitID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getOrbitIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT orbitID FROM mapDenormalize WHERE groupID = :groupID", "orbitID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getOrbitIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT orbitID FROM mapDenormalize WHERE itemID = :itemID", "orbitID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getOrbitIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT orbitID FROM mapDenormalize WHERE itemName = :itemName", "orbitID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $regionID
	 */
	public function getOrbitIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT orbitID FROM mapDenormalize WHERE regionID = :regionID", "orbitID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getOrbitIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT orbitID FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "orbitID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getOrbitIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT orbitID FROM mapDenormalize WHERE typeID = :typeID", "orbitID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getOrbitIndexByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT orbitIndex FROM mapDenormalize WHERE constellationID = :constellationID", "orbitIndex", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getOrbitIndexByGroupID(int $groupID) {
		return $this->db->queryField("SELECT orbitIndex FROM mapDenormalize WHERE groupID = :groupID", "orbitIndex", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getOrbitIndexByItemID(int $itemID) {
		return $this->db->queryField("SELECT orbitIndex FROM mapDenormalize WHERE itemID = :itemID", "orbitIndex", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getOrbitIndexByItemName(string $itemName) {
		return $this->db->queryField("SELECT orbitIndex FROM mapDenormalize WHERE itemName = :itemName", "orbitIndex", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getOrbitIndexByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT orbitIndex FROM mapDenormalize WHERE orbitID = :orbitID", "orbitIndex", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getOrbitIndexByRegionID(int $regionID) {
		return $this->db->queryField("SELECT orbitIndex FROM mapDenormalize WHERE regionID = :regionID", "orbitIndex", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getOrbitIndexBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT orbitIndex FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "orbitIndex", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getOrbitIndexByTypeID(int $typeID) {
		return $this->db->queryField("SELECT orbitIndex FROM mapDenormalize WHERE typeID = :typeID", "orbitIndex", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRadiusByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT radius FROM mapDenormalize WHERE constellationID = :constellationID", "radius", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getRadiusByGroupID(int $groupID) {
		return $this->db->queryField("SELECT radius FROM mapDenormalize WHERE groupID = :groupID", "radius", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getRadiusByItemID(int $itemID) {
		return $this->db->queryField("SELECT radius FROM mapDenormalize WHERE itemID = :itemID", "radius", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getRadiusByItemName(string $itemName) {
		return $this->db->queryField("SELECT radius FROM mapDenormalize WHERE itemName = :itemName", "radius", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getRadiusByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT radius FROM mapDenormalize WHERE orbitID = :orbitID", "radius", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getRadiusByRegionID(int $regionID) {
		return $this->db->queryField("SELECT radius FROM mapDenormalize WHERE regionID = :regionID", "radius", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getRadiusBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT radius FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "radius", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getRadiusByTypeID(int $typeID) {
		return $this->db->queryField("SELECT radius FROM mapDenormalize WHERE typeID = :typeID", "radius", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRegionIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT regionID FROM mapDenormalize WHERE constellationID = :constellationID", "regionID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getRegionIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT regionID FROM mapDenormalize WHERE groupID = :groupID", "regionID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getRegionIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT regionID FROM mapDenormalize WHERE itemID = :itemID", "regionID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getRegionIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT regionID FROM mapDenormalize WHERE itemName = :itemName", "regionID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getRegionIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT regionID FROM mapDenormalize WHERE orbitID = :orbitID", "regionID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getRegionIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT regionID FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "regionID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getRegionIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT regionID FROM mapDenormalize WHERE typeID = :typeID", "regionID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSecurityByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT security FROM mapDenormalize WHERE constellationID = :constellationID", "security", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getSecurityByGroupID(int $groupID) {
		return $this->db->queryField("SELECT security FROM mapDenormalize WHERE groupID = :groupID", "security", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getSecurityByItemID(int $itemID) {
		return $this->db->queryField("SELECT security FROM mapDenormalize WHERE itemID = :itemID", "security", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getSecurityByItemName(string $itemName) {
		return $this->db->queryField("SELECT security FROM mapDenormalize WHERE itemName = :itemName", "security", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getSecurityByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT security FROM mapDenormalize WHERE orbitID = :orbitID", "security", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSecurityByRegionID(int $regionID) {
		return $this->db->queryField("SELECT security FROM mapDenormalize WHERE regionID = :regionID", "security", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getSecurityBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT security FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "security", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getSecurityByTypeID(int $typeID) {
		return $this->db->queryField("SELECT security FROM mapDenormalize WHERE typeID = :typeID", "security", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSolarSystemIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapDenormalize WHERE constellationID = :constellationID", "solarSystemID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getSolarSystemIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapDenormalize WHERE groupID = :groupID", "solarSystemID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getSolarSystemIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapDenormalize WHERE itemID = :itemID", "solarSystemID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getSolarSystemIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT solarSystemID FROM mapDenormalize WHERE itemName = :itemName", "solarSystemID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getSolarSystemIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapDenormalize WHERE orbitID = :orbitID", "solarSystemID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSolarSystemIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapDenormalize WHERE regionID = :regionID", "solarSystemID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $typeID
	 */
	public function getSolarSystemIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapDenormalize WHERE typeID = :typeID", "solarSystemID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getTypeIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT typeID FROM mapDenormalize WHERE constellationID = :constellationID", "typeID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getTypeIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT typeID FROM mapDenormalize WHERE groupID = :groupID", "typeID", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getTypeIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT typeID FROM mapDenormalize WHERE itemID = :itemID", "typeID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getTypeIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT typeID FROM mapDenormalize WHERE itemName = :itemName", "typeID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getTypeIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT typeID FROM mapDenormalize WHERE orbitID = :orbitID", "typeID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getTypeIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT typeID FROM mapDenormalize WHERE regionID = :regionID", "typeID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getTypeIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT typeID FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "typeID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getXByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT x FROM mapDenormalize WHERE constellationID = :constellationID", "x", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getXByGroupID(int $groupID) {
		return $this->db->queryField("SELECT x FROM mapDenormalize WHERE groupID = :groupID", "x", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getXByItemID(int $itemID) {
		return $this->db->queryField("SELECT x FROM mapDenormalize WHERE itemID = :itemID", "x", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getXByItemName(string $itemName) {
		return $this->db->queryField("SELECT x FROM mapDenormalize WHERE itemName = :itemName", "x", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getXByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT x FROM mapDenormalize WHERE orbitID = :orbitID", "x", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXByRegionID(int $regionID) {
		return $this->db->queryField("SELECT x FROM mapDenormalize WHERE regionID = :regionID", "x", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getXBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT x FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "x", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getXByTypeID(int $typeID) {
		return $this->db->queryField("SELECT x FROM mapDenormalize WHERE typeID = :typeID", "x", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getYByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT y FROM mapDenormalize WHERE constellationID = :constellationID", "y", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getYByGroupID(int $groupID) {
		return $this->db->queryField("SELECT y FROM mapDenormalize WHERE groupID = :groupID", "y", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getYByItemID(int $itemID) {
		return $this->db->queryField("SELECT y FROM mapDenormalize WHERE itemID = :itemID", "y", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getYByItemName(string $itemName) {
		return $this->db->queryField("SELECT y FROM mapDenormalize WHERE itemName = :itemName", "y", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getYByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT y FROM mapDenormalize WHERE orbitID = :orbitID", "y", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYByRegionID(int $regionID) {
		return $this->db->queryField("SELECT y FROM mapDenormalize WHERE regionID = :regionID", "y", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getYBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT y FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "y", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getYByTypeID(int $typeID) {
		return $this->db->queryField("SELECT y FROM mapDenormalize WHERE typeID = :typeID", "y", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getZByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT z FROM mapDenormalize WHERE constellationID = :constellationID", "z", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $groupID
	 */
	public function getZByGroupID(int $groupID) {
		return $this->db->queryField("SELECT z FROM mapDenormalize WHERE groupID = :groupID", "z", array(":groupID" => $groupID));
	}

	/**
	 * @param int $itemID
	 */
	public function getZByItemID(int $itemID) {
		return $this->db->queryField("SELECT z FROM mapDenormalize WHERE itemID = :itemID", "z", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getZByItemName(string $itemName) {
		return $this->db->queryField("SELECT z FROM mapDenormalize WHERE itemName = :itemName", "z", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getZByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT z FROM mapDenormalize WHERE orbitID = :orbitID", "z", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZByRegionID(int $regionID) {
		return $this->db->queryField("SELECT z FROM mapDenormalize WHERE regionID = :regionID", "z", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getZBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT z FROM mapDenormalize WHERE solarSystemID = :solarSystemID", "z", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getZByTypeID(int $typeID) {
		return $this->db->queryField("SELECT z FROM mapDenormalize WHERE typeID = :typeID", "z", array(":typeID" => $typeID));
	}
}