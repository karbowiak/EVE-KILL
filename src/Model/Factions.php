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

	/**
	 * @param int $factionID
	 * @param string $factionName
	 * @param string $description
	 */
	public function insertIntoFactions(int $factionID, string $factionName, string $description) {
		return $this->db->execute("INSERT INTO factions (factionID, factionName, description) VALUES (:factionID, :factionName, :description)", array(":factionID" => $factionID, ":factionName" => $factionName, ":description" => $description));
	}

	/**
	 * @param string $description
	 * @param int $factionID
	 */
	public function updateDescriptionByFactionID(string $description, int $factionID) {
		$exists = $this->db->queryField("SELECT description FROM factions WHERE factionID = :factionID", "description", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE factions SET description = :description WHERE factionID = :factionID", array(":factionID" => $factionID, ":description" => $description));
		}
	}

	/**
	 * @param string $description
	 * @param string $factionName
	 */
	public function updateDescriptionByFactionName(string $description, string $factionName) {
		$exists = $this->db->queryField("SELECT description FROM factions WHERE factionName = :factionName", "description", array(":factionName" => $factionName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE factions SET description = :description WHERE factionName = :factionName", array(":factionName" => $factionName, ":description" => $description));
		}
	}

	/**
	 * @param int $factionID
	 * @param string $factionName
	 */
	public function updateFactionIDByFactionName(int $factionID, string $factionName) {
		$exists = $this->db->queryField("SELECT factionID FROM factions WHERE factionName = :factionName", "factionID", array(":factionName" => $factionName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE factions SET factionID = :factionID WHERE factionName = :factionName", array(":factionName" => $factionName, ":factionID" => $factionID));
		}
	}

	/**
	 * @param string $factionName
	 * @param int $factionID
	 */
	public function updateFactionNameByFactionID(string $factionName, int $factionID) {
		$exists = $this->db->queryField("SELECT factionName FROM factions WHERE factionID = :factionID", "factionName", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE factions SET factionName = :factionName WHERE factionID = :factionID", array(":factionID" => $factionID, ":factionName" => $factionName));
		}
	}
}