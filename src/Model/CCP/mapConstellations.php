<?php
namespace App\Model\CCP;

use Slim\Container;

class mapConstellations {

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
		return $this->db->query("SELECT * FROM mapConstellations WHERE constellationID = :constellationID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getAllByConstellationName(string $constellationName) {
		return $this->db->query("SELECT * FROM mapConstellations WHERE constellationName = :constellationName", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllByFactionID(int $factionID) {
		return $this->db->query("SELECT * FROM mapConstellations WHERE factionID = :factionID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getAllByRegionID(int $regionID) {
		return $this->db->query("SELECT * FROM mapConstellations WHERE regionID = :regionID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getConstellationIDByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT constellationID FROM mapConstellations WHERE constellationName = :constellationName", "constellationID", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getConstellationIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT constellationID FROM mapConstellations WHERE factionID = :factionID", "constellationID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getConstellationIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT constellationID FROM mapConstellations WHERE regionID = :regionID", "constellationID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getConstellationNameByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT constellationName FROM mapConstellations WHERE constellationID = :constellationID", "constellationName", array(":constellationID" => $constellationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getConstellationNameByFactionID(int $factionID) {
		return $this->db->queryField("SELECT constellationName FROM mapConstellations WHERE factionID = :factionID", "constellationName", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getConstellationNameByRegionID(int $regionID) {
		return $this->db->queryField("SELECT constellationName FROM mapConstellations WHERE regionID = :regionID", "constellationName", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getFactionIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT factionID FROM mapConstellations WHERE constellationID = :constellationID", "factionID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getFactionIDByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT factionID FROM mapConstellations WHERE constellationName = :constellationName", "factionID", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $regionID
	 */
	public function getFactionIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT factionID FROM mapConstellations WHERE regionID = :regionID", "factionID", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRadiusByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT radius FROM mapConstellations WHERE constellationID = :constellationID", "radius", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getRadiusByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT radius FROM mapConstellations WHERE constellationName = :constellationName", "radius", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getRadiusByFactionID(int $factionID) {
		return $this->db->queryField("SELECT radius FROM mapConstellations WHERE factionID = :factionID", "radius", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getRadiusByRegionID(int $regionID) {
		return $this->db->queryField("SELECT radius FROM mapConstellations WHERE regionID = :regionID", "radius", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getRegionIDByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT regionID FROM mapConstellations WHERE constellationID = :constellationID", "regionID", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getRegionIDByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT regionID FROM mapConstellations WHERE constellationName = :constellationName", "regionID", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getRegionIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT regionID FROM mapConstellations WHERE factionID = :factionID", "regionID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getXByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT x FROM mapConstellations WHERE constellationID = :constellationID", "x", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getXByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT x FROM mapConstellations WHERE constellationName = :constellationName", "x", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getXByFactionID(int $factionID) {
		return $this->db->queryField("SELECT x FROM mapConstellations WHERE factionID = :factionID", "x", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXByRegionID(int $regionID) {
		return $this->db->queryField("SELECT x FROM mapConstellations WHERE regionID = :regionID", "x", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getXMaxByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT xMax FROM mapConstellations WHERE constellationID = :constellationID", "xMax", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getXMaxByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT xMax FROM mapConstellations WHERE constellationName = :constellationName", "xMax", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getXMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT xMax FROM mapConstellations WHERE factionID = :factionID", "xMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT xMax FROM mapConstellations WHERE regionID = :regionID", "xMax", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getXMinByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT xMin FROM mapConstellations WHERE constellationID = :constellationID", "xMin", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getXMinByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT xMin FROM mapConstellations WHERE constellationName = :constellationName", "xMin", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getXMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT xMin FROM mapConstellations WHERE factionID = :factionID", "xMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT xMin FROM mapConstellations WHERE regionID = :regionID", "xMin", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getYByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT y FROM mapConstellations WHERE constellationID = :constellationID", "y", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getYByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT y FROM mapConstellations WHERE constellationName = :constellationName", "y", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getYByFactionID(int $factionID) {
		return $this->db->queryField("SELECT y FROM mapConstellations WHERE factionID = :factionID", "y", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYByRegionID(int $regionID) {
		return $this->db->queryField("SELECT y FROM mapConstellations WHERE regionID = :regionID", "y", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getYMaxByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT yMax FROM mapConstellations WHERE constellationID = :constellationID", "yMax", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getYMaxByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT yMax FROM mapConstellations WHERE constellationName = :constellationName", "yMax", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getYMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT yMax FROM mapConstellations WHERE factionID = :factionID", "yMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT yMax FROM mapConstellations WHERE regionID = :regionID", "yMax", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getYMinByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT yMin FROM mapConstellations WHERE constellationID = :constellationID", "yMin", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getYMinByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT yMin FROM mapConstellations WHERE constellationName = :constellationName", "yMin", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getYMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT yMin FROM mapConstellations WHERE factionID = :factionID", "yMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT yMin FROM mapConstellations WHERE regionID = :regionID", "yMin", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getZByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT z FROM mapConstellations WHERE constellationID = :constellationID", "z", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getZByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT z FROM mapConstellations WHERE constellationName = :constellationName", "z", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getZByFactionID(int $factionID) {
		return $this->db->queryField("SELECT z FROM mapConstellations WHERE factionID = :factionID", "z", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZByRegionID(int $regionID) {
		return $this->db->queryField("SELECT z FROM mapConstellations WHERE regionID = :regionID", "z", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getZMaxByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT zMax FROM mapConstellations WHERE constellationID = :constellationID", "zMax", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getZMaxByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT zMax FROM mapConstellations WHERE constellationName = :constellationName", "zMax", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getZMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT zMax FROM mapConstellations WHERE factionID = :factionID", "zMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT zMax FROM mapConstellations WHERE regionID = :regionID", "zMax", array(":regionID" => $regionID));
	}

	/**
	 * @param int $constellationID
	 */
	public function getZMinByConstellationID(int $constellationID) {
		return $this->db->queryField("SELECT zMin FROM mapConstellations WHERE constellationID = :constellationID", "zMin", array(":constellationID" => $constellationID));
	}

	/**
	 * @param string $constellationName
	 */
	public function getZMinByConstellationName(string $constellationName) {
		return $this->db->queryField("SELECT zMin FROM mapConstellations WHERE constellationName = :constellationName", "zMin", array(":constellationName" => $constellationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getZMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT zMin FROM mapConstellations WHERE factionID = :factionID", "zMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT zMin FROM mapConstellations WHERE regionID = :regionID", "zMin", array(":regionID" => $regionID));
	}
}