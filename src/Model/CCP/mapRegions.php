<?php
namespace App\Model;

use Slim\Container;

class mapRegions {

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
	 * @param int $factionID
	 */
	public function getAllByFactionID(int $factionID) {
		return $this->db->query("SELECT * FROM mapRegions WHERE factionID = :factionID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getAllByRegionID(int $regionID) {
		return $this->db->query("SELECT * FROM mapRegions WHERE regionID = :regionID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getAllByRegionName(string $regionName) {
		return $this->db->query("SELECT * FROM mapRegions WHERE regionName = :regionName", array(":regionName" => $regionName));
	}

	/**
	 * @param int $regionID
	 */
	public function getFactionIDByRegionID(int $regionID) {
		return $this->db->queryField("SELECT factionID FROM mapRegions WHERE regionID = :regionID", "factionID", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getFactionIDByRegionName(string $regionName) {
		return $this->db->queryField("SELECT factionID FROM mapRegions WHERE regionName = :regionName", "factionID", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getRadiusByFactionID(int $factionID) {
		return $this->db->queryField("SELECT radius FROM mapRegions WHERE factionID = :factionID", "radius", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getRadiusByRegionID(int $regionID) {
		return $this->db->queryField("SELECT radius FROM mapRegions WHERE regionID = :regionID", "radius", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getRadiusByRegionName(string $regionName) {
		return $this->db->queryField("SELECT radius FROM mapRegions WHERE regionName = :regionName", "radius", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getRegionIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT regionID FROM mapRegions WHERE factionID = :factionID", "regionID", array(":factionID" => $factionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getRegionIDByRegionName(string $regionName) {
		return $this->db->queryField("SELECT regionID FROM mapRegions WHERE regionName = :regionName", "regionID", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getRegionNameByFactionID(int $factionID) {
		return $this->db->queryField("SELECT regionName FROM mapRegions WHERE factionID = :factionID", "regionName", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getRegionNameByRegionID(int $regionID) {
		return $this->db->queryField("SELECT regionName FROM mapRegions WHERE regionID = :regionID", "regionName", array(":regionID" => $regionID));
	}

	/**
	 * @param int $factionID
	 */
	public function getXByFactionID(int $factionID) {
		return $this->db->queryField("SELECT x FROM mapRegions WHERE factionID = :factionID", "x", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXByRegionID(int $regionID) {
		return $this->db->queryField("SELECT x FROM mapRegions WHERE regionID = :regionID", "x", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getXByRegionName(string $regionName) {
		return $this->db->queryField("SELECT x FROM mapRegions WHERE regionName = :regionName", "x", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getXMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT xMax FROM mapRegions WHERE factionID = :factionID", "xMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT xMax FROM mapRegions WHERE regionID = :regionID", "xMax", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getXMaxByRegionName(string $regionName) {
		return $this->db->queryField("SELECT xMax FROM mapRegions WHERE regionName = :regionName", "xMax", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getXMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT xMin FROM mapRegions WHERE factionID = :factionID", "xMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getXMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT xMin FROM mapRegions WHERE regionID = :regionID", "xMin", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getXMinByRegionName(string $regionName) {
		return $this->db->queryField("SELECT xMin FROM mapRegions WHERE regionName = :regionName", "xMin", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getYByFactionID(int $factionID) {
		return $this->db->queryField("SELECT y FROM mapRegions WHERE factionID = :factionID", "y", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYByRegionID(int $regionID) {
		return $this->db->queryField("SELECT y FROM mapRegions WHERE regionID = :regionID", "y", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getYByRegionName(string $regionName) {
		return $this->db->queryField("SELECT y FROM mapRegions WHERE regionName = :regionName", "y", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getYMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT yMax FROM mapRegions WHERE factionID = :factionID", "yMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT yMax FROM mapRegions WHERE regionID = :regionID", "yMax", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getYMaxByRegionName(string $regionName) {
		return $this->db->queryField("SELECT yMax FROM mapRegions WHERE regionName = :regionName", "yMax", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getYMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT yMin FROM mapRegions WHERE factionID = :factionID", "yMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getYMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT yMin FROM mapRegions WHERE regionID = :regionID", "yMin", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getYMinByRegionName(string $regionName) {
		return $this->db->queryField("SELECT yMin FROM mapRegions WHERE regionName = :regionName", "yMin", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getZByFactionID(int $factionID) {
		return $this->db->queryField("SELECT z FROM mapRegions WHERE factionID = :factionID", "z", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZByRegionID(int $regionID) {
		return $this->db->queryField("SELECT z FROM mapRegions WHERE regionID = :regionID", "z", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getZByRegionName(string $regionName) {
		return $this->db->queryField("SELECT z FROM mapRegions WHERE regionName = :regionName", "z", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getZMaxByFactionID(int $factionID) {
		return $this->db->queryField("SELECT zMax FROM mapRegions WHERE factionID = :factionID", "zMax", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZMaxByRegionID(int $regionID) {
		return $this->db->queryField("SELECT zMax FROM mapRegions WHERE regionID = :regionID", "zMax", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getZMaxByRegionName(string $regionName) {
		return $this->db->queryField("SELECT zMax FROM mapRegions WHERE regionName = :regionName", "zMax", array(":regionName" => $regionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getZMinByFactionID(int $factionID) {
		return $this->db->queryField("SELECT zMin FROM mapRegions WHERE factionID = :factionID", "zMin", array(":factionID" => $factionID));
	}

	/**
	 * @param int $regionID
	 */
	public function getZMinByRegionID(int $regionID) {
		return $this->db->queryField("SELECT zMin FROM mapRegions WHERE regionID = :regionID", "zMin", array(":regionID" => $regionID));
	}

	/**
	 * @param string $regionName
	 */
	public function getZMinByRegionName(string $regionName) {
		return $this->db->queryField("SELECT zMin FROM mapRegions WHERE regionName = :regionName", "zMin", array(":regionName" => $regionName));
	}
}