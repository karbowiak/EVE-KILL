<?php
namespace App\Model\CCP;

use Slim\Container;

class mapSolarSystems {

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
		return $this->db->query("SELECT * FROM mapSolarSystems WHERE constellationID = :constellationID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllByFactionID(int $factionID) {
		return $this->db->query("SELECT * FROM mapSolarSystems WHERE factionID = :factionID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getAllByRegionID(int $regionID) {
		return $this->db->query("SELECT * FROM mapSolarSystems WHERE regionID = :regionID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getAllBySolarSystemID(int $solarSystemID) {
		return $this->db->query("SELECT * FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getAllBySolarSystemName(string $solarSystemName) {
		return $this->db->query("SELECT * FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getAllBySunTypeID(int $sunTypeID) {
		return $this->db->query("SELECT * FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getBorderByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT border FROM mapSolarSystems WHERE constellationID = :constellationID", "border", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getBorderByFactionID(int $factionID) {
		return $this->db->queryField("SELECT border FROM mapSolarSystems WHERE factionID = :factionID", "border", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getBorderByRegionID(int $regionID) {
		return $this->db->queryField("SELECT border FROM mapSolarSystems WHERE regionID = :regionID", "border", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getBorderBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT border FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "border", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getBorderBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT border FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "border", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getBorderBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT border FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "border", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getConstellationByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT constellation FROM mapSolarSystems WHERE constellationID = :constellationID", "constellation", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getConstellationByFactionID(int $factionID) {
		return $this->db->queryField("SELECT constellation FROM mapSolarSystems WHERE factionID = :factionID", "constellation", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getConstellationByRegionID(int $regionID) {
		return $this->db->queryField("SELECT constellation FROM mapSolarSystems WHERE regionID = :regionID", "constellation", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getConstellationBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT constellation FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "constellation", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getConstellationBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT constellation FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "constellation", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getConstellationBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT constellation FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "constellation", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $factionID
	 */
	public function getConstellationIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT constellationID FROM mapSolarSystems WHERE factionID = :factionID", "constellationID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getConstellationIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT constellationID FROM mapSolarSystems WHERE regionID = :regionID", "constellationID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getConstellationIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT constellationID FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "constellationID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getConstellationIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT constellationID FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "constellationID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getConstellationIDBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT constellationID FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "constellationID", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getCorridorByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT corridor FROM mapSolarSystems WHERE constellationID = :constellationID", "corridor", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getCorridorByFactionID(int $factionID) {
		return $this->db->queryField("SELECT corridor FROM mapSolarSystems WHERE factionID = :factionID", "corridor", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getCorridorByRegionID(int $regionID) {
		return $this->db->queryField("SELECT corridor FROM mapSolarSystems WHERE regionID = :regionID", "corridor", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getCorridorBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT corridor FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "corridor", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getCorridorBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT corridor FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "corridor", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getCorridorBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT corridor FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "corridor", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getFactionIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT factionID FROM mapSolarSystems WHERE constellationID = :constellationID", "factionID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $regionID
	 */
	public function getFactionIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT factionID FROM mapSolarSystems WHERE regionID = :regionID", "factionID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getFactionIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT factionID FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "factionID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getFactionIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT factionID FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "factionID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getFactionIDBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT factionID FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "factionID", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getFringeByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT fringe FROM mapSolarSystems WHERE constellationID = :constellationID", "fringe", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getFringeByFactionID(int $factionID) {
		return $this->db->queryField("SELECT fringe FROM mapSolarSystems WHERE factionID = :factionID", "fringe", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getFringeByRegionID(int $regionID) {
		return $this->db->queryField("SELECT fringe FROM mapSolarSystems WHERE regionID = :regionID", "fringe", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getFringeBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT fringe FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "fringe", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getFringeBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT fringe FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "fringe", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getFringeBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT fringe FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "fringe", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getHubByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT hub FROM mapSolarSystems WHERE constellationID = :constellationID", "hub", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getHubByFactionID(int $factionID) {
		return $this->db->queryField("SELECT hub FROM mapSolarSystems WHERE factionID = :factionID", "hub", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getHubByRegionID(int $regionID) {
		return $this->db->queryField("SELECT hub FROM mapSolarSystems WHERE regionID = :regionID", "hub", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getHubBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT hub FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "hub", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getHubBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT hub FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "hub", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getHubBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT hub FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "hub", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getInternationalByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT international FROM mapSolarSystems WHERE constellationID = :constellationID", "international", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getInternationalByFactionID(int $factionID) {
		return $this->db->queryField("SELECT international FROM mapSolarSystems WHERE factionID = :factionID", "international", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getInternationalByRegionID(int $regionID) {
		return $this->db->queryField("SELECT international FROM mapSolarSystems WHERE regionID = :regionID", "international", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getInternationalBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT international FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "international", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getInternationalBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT international FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "international", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getInternationalBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT international FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "international", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getLuminosityByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT luminosity FROM mapSolarSystems WHERE constellationID = :constellationID", "luminosity", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getLuminosityByFactionID(int $factionID) {
		return $this->db->queryField("SELECT luminosity FROM mapSolarSystems WHERE factionID = :factionID", "luminosity", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getLuminosityByRegionID(int $regionID) {
		return $this->db->queryField("SELECT luminosity FROM mapSolarSystems WHERE regionID = :regionID", "luminosity", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getLuminosityBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT luminosity FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "luminosity", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getLuminosityBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT luminosity FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "luminosity", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getLuminosityBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT luminosity FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "luminosity", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRadiusByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT radius FROM mapSolarSystems WHERE constellationID = :constellationID", "radius", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getRadiusByFactionID(int $factionID) {
		return $this->db->queryField("SELECT radius FROM mapSolarSystems WHERE factionID = :factionID", "radius", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getRadiusByRegionID(int $regionID) {
		return $this->db->queryField("SELECT radius FROM mapSolarSystems WHERE regionID = :regionID", "radius", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getRadiusBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT radius FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "radius", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getRadiusBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT radius FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "radius", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getRadiusBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT radius FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "radius", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRegionalByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT regional FROM mapSolarSystems WHERE constellationID = :constellationID", "regional", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getRegionalByFactionID(int $factionID) {
		return $this->db->queryField("SELECT regional FROM mapSolarSystems WHERE factionID = :factionID", "regional", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getRegionalByRegionID(int $regionID) {
		return $this->db->queryField("SELECT regional FROM mapSolarSystems WHERE regionID = :regionID", "regional", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getRegionalBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT regional FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "regional", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getRegionalBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT regional FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "regional", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getRegionalBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT regional FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "regional", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRegionIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT regionID FROM mapSolarSystems WHERE constellationID = :constellationID", "regionID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getRegionIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT regionID FROM mapSolarSystems WHERE factionID = :factionID", "regionID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getRegionIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT regionID FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "regionID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getRegionIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT regionID FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "regionID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getRegionIDBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT regionID FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "regionID", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSecurityByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT security FROM mapSolarSystems WHERE constellationID = :constellationID", "security", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getSecurityByFactionID(int $factionID) {
		return $this->db->queryField("SELECT security FROM mapSolarSystems WHERE factionID = :factionID", "security", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSecurityByRegionID(int $regionID) {
		return $this->db->queryField("SELECT security FROM mapSolarSystems WHERE regionID = :regionID", "security", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getSecurityBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT security FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "security", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getSecurityBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT security FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "security", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getSecurityBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT security FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "security", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSecurityClassByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT securityClass FROM mapSolarSystems WHERE constellationID = :constellationID", "securityClass", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getSecurityClassByFactionID(int $factionID) {
		return $this->db->queryField("SELECT securityClass FROM mapSolarSystems WHERE factionID = :factionID", "securityClass", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSecurityClassByRegionID(int $regionID) {
		return $this->db->queryField("SELECT securityClass FROM mapSolarSystems WHERE regionID = :regionID", "securityClass", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getSecurityClassBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT securityClass FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "securityClass", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getSecurityClassBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT securityClass FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "securityClass", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getSecurityClassBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT securityClass FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "securityClass", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSolarSystemIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapSolarSystems WHERE constellationID = :constellationID", "solarSystemID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getSolarSystemIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapSolarSystems WHERE factionID = :factionID", "solarSystemID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSolarSystemIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapSolarSystems WHERE regionID = :regionID", "solarSystemID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getSolarSystemIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT solarSystemID FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "solarSystemID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getSolarSystemIDBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT solarSystemID FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "solarSystemID", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSolarSystemNameByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapSolarSystems WHERE constellationID = :constellationID", "solarSystemName", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getSolarSystemNameByFactionID(int $factionID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapSolarSystems WHERE factionID = :factionID", "solarSystemName", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSolarSystemNameByRegionID(int $regionID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapSolarSystems WHERE regionID = :regionID", "solarSystemName", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getSolarSystemNameBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "solarSystemName", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getSolarSystemNameBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT solarSystemName FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "solarSystemName", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getSunTypeIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT sunTypeID FROM mapSolarSystems WHERE constellationID = :constellationID", "sunTypeID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getSunTypeIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT sunTypeID FROM mapSolarSystems WHERE factionID = :factionID", "sunTypeID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getSunTypeIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT sunTypeID FROM mapSolarSystems WHERE regionID = :regionID", "sunTypeID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getSunTypeIDBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT sunTypeID FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "sunTypeID", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getSunTypeIDBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT sunTypeID FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "sunTypeID", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $constellationID
	 */
	public function getXByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT x FROM mapSolarSystems WHERE constellationID = :constellationID", "x", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getXByFactionID(int $factionID) {
		return $this->db->queryField("SELECT x FROM mapSolarSystems WHERE factionID = :factionID", "x", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXByRegionID(int $regionID) {
		return $this->db->queryField("SELECT x FROM mapSolarSystems WHERE regionID = :regionID", "x", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getXBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT x FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "x", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getXBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT x FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "x", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getXBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT x FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "x", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getXMaxByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT xMax FROM mapSolarSystems WHERE constellationID = :constellationID", "xMax", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getXMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT xMax FROM mapSolarSystems WHERE factionID = :factionID", "xMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT xMax FROM mapSolarSystems WHERE regionID = :regionID", "xMax", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getXMaxBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT xMax FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "xMax", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getXMaxBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT xMax FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "xMax", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getXMaxBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT xMax FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "xMax", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getXMinByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT xMin FROM mapSolarSystems WHERE constellationID = :constellationID", "xMin", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getXMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT xMin FROM mapSolarSystems WHERE factionID = :factionID", "xMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT xMin FROM mapSolarSystems WHERE regionID = :regionID", "xMin", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getXMinBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT xMin FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "xMin", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getXMinBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT xMin FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "xMin", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getXMinBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT xMin FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "xMin", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getYByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT y FROM mapSolarSystems WHERE constellationID = :constellationID", "y", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getYByFactionID(int $factionID) {
		return $this->db->queryField("SELECT y FROM mapSolarSystems WHERE factionID = :factionID", "y", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYByRegionID(int $regionID) {
		return $this->db->queryField("SELECT y FROM mapSolarSystems WHERE regionID = :regionID", "y", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getYBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT y FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "y", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getYBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT y FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "y", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getYBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT y FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "y", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getYMaxByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT yMax FROM mapSolarSystems WHERE constellationID = :constellationID", "yMax", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getYMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT yMax FROM mapSolarSystems WHERE factionID = :factionID", "yMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT yMax FROM mapSolarSystems WHERE regionID = :regionID", "yMax", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getYMaxBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT yMax FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "yMax", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getYMaxBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT yMax FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "yMax", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getYMaxBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT yMax FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "yMax", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getYMinByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT yMin FROM mapSolarSystems WHERE constellationID = :constellationID", "yMin", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getYMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT yMin FROM mapSolarSystems WHERE factionID = :factionID", "yMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT yMin FROM mapSolarSystems WHERE regionID = :regionID", "yMin", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getYMinBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT yMin FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "yMin", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getYMinBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT yMin FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "yMin", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getYMinBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT yMin FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "yMin", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getZByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT z FROM mapSolarSystems WHERE constellationID = :constellationID", "z", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getZByFactionID(int $factionID) {
		return $this->db->queryField("SELECT z FROM mapSolarSystems WHERE factionID = :factionID", "z", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZByRegionID(int $regionID) {
		return $this->db->queryField("SELECT z FROM mapSolarSystems WHERE regionID = :regionID", "z", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getZBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT z FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "z", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getZBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT z FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "z", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getZBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT z FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "z", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getZMaxByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT zMax FROM mapSolarSystems WHERE constellationID = :constellationID", "zMax", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getZMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT zMax FROM mapSolarSystems WHERE factionID = :factionID", "zMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT zMax FROM mapSolarSystems WHERE regionID = :regionID", "zMax", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getZMaxBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT zMax FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "zMax", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getZMaxBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT zMax FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "zMax", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getZMaxBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT zMax FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "zMax", array(":sunTypeID" => $sunTypeID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getZMinByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT zMin FROM mapSolarSystems WHERE constellationID = :constellationID", "zMin", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getZMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT zMin FROM mapSolarSystems WHERE factionID = :factionID", "zMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT zMin FROM mapSolarSystems WHERE regionID = :regionID", "zMin", array(":regionID" => $regionID));
	}

	/**
	 * @param int $solarSystemID
	 */
	public function getZMinBySolarSystemID(int $solarSystemID) {
		return $this->db->queryField("SELECT zMin FROM mapSolarSystems WHERE solarSystemID = :solarSystemID", "zMin", array(":solarSystemID" => $solarSystemID));
	}

	/**
	 * @param string $solarSystemName
	 */
	public function getZMinBySolarSystemName(string $solarSystemName) {
		return $this->db->queryField("SELECT zMin FROM mapSolarSystems WHERE solarSystemName = :solarSystemName", "zMin", array(":solarSystemName" => $solarSystemName));
	}

	/**
	 * @param int $sunTypeID
	 */
	public function getZMinBySunTypeID(int $sunTypeID) {
		return $this->db->queryField("SELECT zMin FROM mapSolarSystems WHERE sunTypeID = :sunTypeID", "zMin", array(":sunTypeID" => $sunTypeID));
	}
}