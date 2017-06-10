<?php
namespace App\Model;

use Slim\Container;

class mapAllCelestials {

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
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE constellationID = :constellationID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getAllByItemID(int $itemID) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE itemID = :itemID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getAllByItemName(string $itemName) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE itemName = :itemName", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getAllByOrbitID(int $orbitID) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE orbitID = :orbitID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getAllByRegionID(int $regionID) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE regionID = :regionID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getAllByRegionName(string $regionName) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE regionName = :regionName", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getAllBySolarSystemID(int $solarSystemID) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getAllBySolarSystemName(string $solarSystemName) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getAllByTypeID(int $typeID) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE typeID = :typeID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getAllByTypeName(string $typeName) {
		return $this->db->query("SELECT * FROM mapAllCelestials WHERE typeName = :typeName", array(":typeName" => $typeName));
	}

	/**
	 * @param int $itemID
	 */
	public function getConstellationIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE itemID = :itemID", "constellationID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getConstellationIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE itemName = :itemName", "constellationID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getConstellationIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE orbitID = :orbitID", "constellationID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getConstellationIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE regionID = :regionID", "constellationID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getConstellationIDByRegionName(string $regionName) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE regionName = :regionName", "constellationID", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getConstellationIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "constellationID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getConstellationIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "constellationID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getConstellationIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE typeID = :typeID", "constellationID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getConstellationIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT constellationID FROM mapAllCelestials WHERE typeName = :typeName", "constellationID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getItemIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE constellationID = :constellationID", "itemID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $itemName
	 */
	public function getItemIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE itemName = :itemName", "itemID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getItemIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE orbitID = :orbitID", "itemID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getItemIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE regionID = :regionID", "itemID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getItemIDByRegionName(string $regionName) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE regionName = :regionName", "itemID", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getItemIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "itemID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getItemIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "itemID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getItemIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE typeID = :typeID", "itemID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getItemIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT itemID FROM mapAllCelestials WHERE typeName = :typeName", "itemID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getItemNameByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE constellationID = :constellationID", "itemName", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getItemNameByItemID(int $itemID) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE itemID = :itemID", "itemName", array(":itemID" => $itemID));
	}

	/**
	 * @param int $orbitID
	 */
	public function getItemNameByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE orbitID = :orbitID", "itemName", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getItemNameByRegionID(int $regionID) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE regionID = :regionID", "itemName", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getItemNameByRegionName(string $regionName) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE regionName = :regionName", "itemName", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getItemNameBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "itemName", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getItemNameBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "itemName", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getItemNameByTypeID(int $typeID) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE typeID = :typeID", "itemName", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getItemNameByTypeName(string $typeName) {
		return $this->db->queryField("SELECT itemName FROM mapAllCelestials WHERE typeName = :typeName", "itemName", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getOrbitIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE constellationID = :constellationID", "orbitID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getOrbitIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE itemID = :itemID", "orbitID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getOrbitIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE itemName = :itemName", "orbitID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $regionID
	 */
	public function getOrbitIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE regionID = :regionID", "orbitID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getOrbitIDByRegionName(string $regionName) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE regionName = :regionName", "orbitID", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getOrbitIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "orbitID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getOrbitIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "orbitID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getOrbitIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE typeID = :typeID", "orbitID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getOrbitIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT orbitID FROM mapAllCelestials WHERE typeName = :typeName", "orbitID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRegionIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE constellationID = :constellationID", "regionID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getRegionIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE itemID = :itemID", "regionID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getRegionIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE itemName = :itemName", "regionID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getRegionIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE orbitID = :orbitID", "regionID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param string $regionName
	 */
	public function getRegionIDByRegionName(string $regionName) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE regionName = :regionName", "regionID", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getRegionIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "regionID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getRegionIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "regionID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getRegionIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE typeID = :typeID", "regionID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getRegionIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT regionID FROM mapAllCelestials WHERE typeName = :typeName", "regionID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRegionNameByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE constellationID = :constellationID", "regionName", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getRegionNameByItemID(int $itemID) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE itemID = :itemID", "regionName", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getRegionNameByItemName(string $itemName) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE itemName = :itemName", "regionName", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getRegionNameByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE orbitID = :orbitID", "regionName", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getRegionNameByRegionID(int $regionID) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE regionID = :regionID", "regionName", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getRegionNameBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "regionName", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getRegionNameBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "regionName", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getRegionNameByTypeID(int $typeID) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE typeID = :typeID", "regionName", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getRegionNameByTypeName(string $typeName) {
		return $this->db->queryField("SELECT regionName FROM mapAllCelestials WHERE typeName = :typeName", "regionName", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSolarSystemIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE constellationID = :constellationID", "solarSystemID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getSolarSystemIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE itemID = :itemID", "solarSystemID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getSolarSystemIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE itemName = :itemName", "solarSystemID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getSolarSystemIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE orbitID = :orbitID", "solarSystemID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSolarSystemIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE regionID = :regionID", "solarSystemID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getSolarSystemIDByRegionName(string $regionName) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE regionName = :regionName", "solarSystemID", array(":regionName" => $regionName));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getSolarSystemIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "solarSystemID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getSolarSystemIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE typeID = :typeID", "solarSystemID", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getSolarSystemIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT solarSystemID FROM mapAllCelestials WHERE typeName = :typeName", "solarSystemID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSolarSystemNameByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE constellationID = :constellationID", "solarSystemName", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getSolarSystemNameByItemID(int $itemID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE itemID = :itemID", "solarSystemName", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getSolarSystemNameByItemName(string $itemName) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE itemName = :itemName", "solarSystemName", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getSolarSystemNameByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE orbitID = :orbitID", "solarSystemName", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSolarSystemNameByRegionID(int $regionID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE regionID = :regionID", "solarSystemName", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getSolarSystemNameByRegionName(string $regionName) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE regionName = :regionName", "solarSystemName", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getSolarSystemNameBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "solarSystemName", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $typeID
	 */
	public function getSolarSystemNameByTypeID(int $typeID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE typeID = :typeID", "solarSystemName", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getSolarSystemNameByTypeName(string $typeName) {
		return $this->db->queryField("SELECT solarSystemName FROM mapAllCelestials WHERE typeName = :typeName", "solarSystemName", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getTypeIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE constellationID = :constellationID", "typeID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getTypeIDByItemID(int $itemID) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE itemID = :itemID", "typeID", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getTypeIDByItemName(string $itemName) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE itemName = :itemName", "typeID", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getTypeIDByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE orbitID = :orbitID", "typeID", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getTypeIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE regionID = :regionID", "typeID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getTypeIDByRegionName(string $regionName) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE regionName = :regionName", "typeID", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getTypeIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "typeID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getTypeIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "typeID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param string $typeName
	 */
	public function getTypeIDByTypeName(string $typeName) {
		return $this->db->queryField("SELECT typeID FROM mapAllCelestials WHERE typeName = :typeName", "typeID", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getTypeNameByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE constellationID = :constellationID", "typeName", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getTypeNameByItemID(int $itemID) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE itemID = :itemID", "typeName", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getTypeNameByItemName(string $itemName) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE itemName = :itemName", "typeName", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getTypeNameByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE orbitID = :orbitID", "typeName", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getTypeNameByRegionID(int $regionID) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE regionID = :regionID", "typeName", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getTypeNameByRegionName(string $regionName) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE regionName = :regionName", "typeName", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getTypeNameBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "typeName", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getTypeNameBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "typeName", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getTypeNameByTypeID(int $typeID) {
		return $this->db->queryField("SELECT typeName FROM mapAllCelestials WHERE typeID = :typeID", "typeName", array(":typeID" => $typeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getXByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE constellationID = :constellationID", "x", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getXByItemID(int $itemID) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE itemID = :itemID", "x", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getXByItemName(string $itemName) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE itemName = :itemName", "x", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getXByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE orbitID = :orbitID", "x", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXByRegionID(int $regionID) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE regionID = :regionID", "x", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getXByRegionName(string $regionName) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE regionName = :regionName", "x", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getXBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "x", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getXBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "x", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getXByTypeID(int $typeID) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE typeID = :typeID", "x", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getXByTypeName(string $typeName) {
		return $this->db->queryField("SELECT x FROM mapAllCelestials WHERE typeName = :typeName", "x", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getYByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE constellationID = :constellationID", "y", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getYByItemID(int $itemID) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE itemID = :itemID", "y", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getYByItemName(string $itemName) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE itemName = :itemName", "y", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getYByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE orbitID = :orbitID", "y", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYByRegionID(int $regionID) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE regionID = :regionID", "y", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getYByRegionName(string $regionName) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE regionName = :regionName", "y", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getYBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "y", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getYBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "y", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getYByTypeID(int $typeID) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE typeID = :typeID", "y", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getYByTypeName(string $typeName) {
		return $this->db->queryField("SELECT y FROM mapAllCelestials WHERE typeName = :typeName", "y", array(":typeName" => $typeName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getZByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE constellationID = :constellationID", "z", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $itemID
	 */
	public function getZByItemID(int $itemID) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE itemID = :itemID", "z", array(":itemID" => $itemID));
	}

	/**
	 * @param string $itemName
	 */
	public function getZByItemName(string $itemName) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE itemName = :itemName", "z", array(":itemName" => $itemName));
	}

	/**
	 * @param int $orbitID
	 */
	public function getZByOrbitID(int $orbitID) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE orbitID = :orbitID", "z", array(":orbitID" => $orbitID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZByRegionID(int $regionID) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE regionID = :regionID", "z", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getZByRegionName(string $regionName) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE regionName = :regionName", "z", array(":regionName" => $regionName));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getZBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE solarSystemID = :solarSystemID", "z", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getZBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE solarSystemName = :solarSystemName", "z", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $typeID
	 */
	public function getZByTypeID(int $typeID) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE typeID = :typeID", "z", array(":typeID" => $typeID));
	}

	/**
	 * @param string $typeName
	 */
	public function getZByTypeName(string $typeName) {
		return $this->db->queryField("SELECT z FROM mapAllCelestials WHERE typeName = :typeName", "z", array(":typeName" => $typeName));
	}
}