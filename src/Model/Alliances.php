<?php
namespace App\Model;

use Slim\Container;

class alliances {

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
	 * @param int $allianceID
	 */
	public function getAllByAllianceID(int $allianceID) {
		return $this->db->query("SELECT * FROM alliances WHERE allianceID = :allianceID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param string $allianceName
	 */
	public function getAllByAllianceName(string $allianceName) {
		return $this->db->query("SELECT * FROM alliances WHERE allianceName = :allianceName", array(":allianceName" => $allianceName));
	}

	/**
	 * @param int $executorCorporationID
	 */
	public function getAllByExecutorCorporationID(int $executorCorporationID) {
		return $this->db->query("SELECT * FROM alliances WHERE executorCorporationID = :executorCorporationID", array(":executorCorporationID" => $executorCorporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllByFactionID(int $factionID) {
		return $this->db->query("SELECT * FROM alliances WHERE factionID = :factionID", array(":factionID" => $factionID));
	}

	/**
	 * @param string $allianceName
	 */
	public function getAllianceIDByAllianceName(string $allianceName) {
		return $this->db->queryField("SELECT allianceID FROM alliances WHERE allianceName = :allianceName", "allianceID", array(":allianceName" => $allianceName));
	}

	/**
	 * @param int $executorCorporationID
	 */
	public function getAllianceIDByExecutorCorporationID(int $executorCorporationID) {
		return $this->db->queryField("SELECT allianceID FROM alliances WHERE executorCorporationID = :executorCorporationID", "allianceID", array(":executorCorporationID" => $executorCorporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllianceIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT allianceID FROM alliances WHERE factionID = :factionID", "allianceID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getAllianceNameByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT allianceName FROM alliances WHERE allianceID = :allianceID", "allianceName", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $executorCorporationID
	 */
	public function getAllianceNameByExecutorCorporationID(int $executorCorporationID) {
		return $this->db->queryField("SELECT allianceName FROM alliances WHERE executorCorporationID = :executorCorporationID", "allianceName", array(":executorCorporationID" => $executorCorporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllianceNameByFactionID(int $factionID) {
		return $this->db->queryField("SELECT allianceName FROM alliances WHERE factionID = :factionID", "allianceName", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getAllianceTickerByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT allianceTicker FROM alliances WHERE allianceID = :allianceID", "allianceTicker", array(":allianceID" => $allianceID));
	}

	/**
	 * @param string $allianceName
	 */
	public function getAllianceTickerByAllianceName(string $allianceName) {
		return $this->db->queryField("SELECT allianceTicker FROM alliances WHERE allianceName = :allianceName", "allianceTicker", array(":allianceName" => $allianceName));
	}

	/**
	 * @param int $executorCorporationID
	 */
	public function getAllianceTickerByExecutorCorporationID(int $executorCorporationID) {
		return $this->db->queryField("SELECT allianceTicker FROM alliances WHERE executorCorporationID = :executorCorporationID", "allianceTicker", array(":executorCorporationID" => $executorCorporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllianceTickerByFactionID(int $factionID) {
		return $this->db->queryField("SELECT allianceTicker FROM alliances WHERE factionID = :factionID", "allianceTicker", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getDateAddedByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT dateAdded FROM alliances WHERE allianceID = :allianceID", "dateAdded", array(":allianceID" => $allianceID));
	}

	/**
	 * @param string $allianceName
	 */
	public function getDateAddedByAllianceName(string $allianceName) {
		return $this->db->queryField("SELECT dateAdded FROM alliances WHERE allianceName = :allianceName", "dateAdded", array(":allianceName" => $allianceName));
	}

	/**
	 * @param int $executorCorporationID
	 */
	public function getDateAddedByExecutorCorporationID(int $executorCorporationID) {
		return $this->db->queryField("SELECT dateAdded FROM alliances WHERE executorCorporationID = :executorCorporationID", "dateAdded", array(":executorCorporationID" => $executorCorporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getDateAddedByFactionID(int $factionID) {
		return $this->db->queryField("SELECT dateAdded FROM alliances WHERE factionID = :factionID", "dateAdded", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getExecutorCorporationIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT executorCorporationID FROM alliances WHERE allianceID = :allianceID", "executorCorporationID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param string $allianceName
	 */
	public function getExecutorCorporationIDByAllianceName(string $allianceName) {
		return $this->db->queryField("SELECT executorCorporationID FROM alliances WHERE allianceName = :allianceName", "executorCorporationID", array(":allianceName" => $allianceName));
	}

	/**
	 * @param int $factionID
	 */
	public function getExecutorCorporationIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT executorCorporationID FROM alliances WHERE factionID = :factionID", "executorCorporationID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getFactionIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT factionID FROM alliances WHERE allianceID = :allianceID", "factionID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param string $allianceName
	 */
	public function getFactionIDByAllianceName(string $allianceName) {
		return $this->db->queryField("SELECT factionID FROM alliances WHERE allianceName = :allianceName", "factionID", array(":allianceName" => $allianceName));
	}

	/**
	 * @param int $executorCorporationID
	 */
	public function getFactionIDByExecutorCorporationID(int $executorCorporationID) {
		return $this->db->queryField("SELECT factionID FROM alliances WHERE executorCorporationID = :executorCorporationID", "factionID", array(":executorCorporationID" => $executorCorporationID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getLastUpdatedByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT lastUpdated FROM alliances WHERE allianceID = :allianceID", "lastUpdated", array(":allianceID" => $allianceID));
	}

	/**
	 * @param string $allianceName
	 */
	public function getLastUpdatedByAllianceName(string $allianceName) {
		return $this->db->queryField("SELECT lastUpdated FROM alliances WHERE allianceName = :allianceName", "lastUpdated", array(":allianceName" => $allianceName));
	}

	/**
	 * @param int $executorCorporationID
	 */
	public function getLastUpdatedByExecutorCorporationID(int $executorCorporationID) {
		return $this->db->queryField("SELECT lastUpdated FROM alliances WHERE executorCorporationID = :executorCorporationID", "lastUpdated", array(":executorCorporationID" => $executorCorporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getLastUpdatedByFactionID(int $factionID) {
		return $this->db->queryField("SELECT lastUpdated FROM alliances WHERE factionID = :factionID", "lastUpdated", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 * @param int $factionID
	 * @param string $allianceName
	 * @param string $allianceTicker
	 * @param int $executorCorporationID
	 */
	public function insertIntoAlliances(int $allianceID, int $factionID, string $allianceName, string $allianceTicker, int $executorCorporationID) {
		return $this->db->execute("INSERT INTO alliances (allianceID, factionID, allianceName, allianceTicker, executorCorporationID) VALUES (:allianceID, :factionID, :allianceName, :allianceTicker, :executorCorporationID)", array(":allianceID" => $allianceID, ":factionID" => $factionID, ":allianceName" => $allianceName, ":allianceTicker" => $allianceTicker, ":executorCorporationID" => $executorCorporationID));
	}
}