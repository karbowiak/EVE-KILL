<?php
namespace App\Model;

use Slim\Container;

class factions {

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
		return $this->db->query("SELECT * FROM factions WHERE factionID = :factionID", array(":factionID" => $factionID));
	}

	/**
	 * @param string $factionName
	 */
	public function getAllByFactionName(string $factionName) {
		return $this->db->query("SELECT * FROM factions WHERE factionName = :factionName", array(":factionName" => $factionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getDescriptionByFactionID(int $factionID) {
		return $this->db->queryField("SELECT description FROM factions WHERE factionID = :factionID", "description", array(":factionID" => $factionID));
	}

	/**
	 * @param string $factionName
	 */
	public function getDescriptionByFactionName(string $factionName) {
		return $this->db->queryField("SELECT description FROM factions WHERE factionName = :factionName", "description", array(":factionName" => $factionName));
	}

	/**
	 * @param string $factionName
	 */
	public function getFactionIDByFactionName(string $factionName) {
		return $this->db->queryField("SELECT factionID FROM factions WHERE factionName = :factionName", "factionID", array(":factionName" => $factionName));
	}

	/**
	 * @param int $factionID
	 */
	public function getFactionNameByFactionID(int $factionID) {
		return $this->db->queryField("SELECT factionName FROM factions WHERE factionID = :factionID", "factionName", array(":factionID" => $factionID));
	}
}