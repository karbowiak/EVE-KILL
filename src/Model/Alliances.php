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

	/**
	 * @param int $allianceID
	 * @param string $allianceName
	 */
	public function updateAllianceIDByAllianceName(int $allianceID, string $allianceName) {
		$exists = $this->db->queryField("SELECT allianceID FROM alliances WHERE allianceName = :allianceName", "allianceID", array(":allianceName" => $allianceName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceID = :allianceID WHERE allianceName = :allianceName", array(":allianceName" => $allianceName, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param int $executorCorporationID
	 */
	public function updateAllianceIDByExecutorCorporationID(int $allianceID, int $executorCorporationID) {
		$exists = $this->db->queryField("SELECT allianceID FROM alliances WHERE executorCorporationID = :executorCorporationID", "allianceID", array(":executorCorporationID" => $executorCorporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceID = :allianceID WHERE executorCorporationID = :executorCorporationID", array(":executorCorporationID" => $executorCorporationID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param int $factionID
	 */
	public function updateAllianceIDByFactionID(int $allianceID, int $factionID) {
		$exists = $this->db->queryField("SELECT allianceID FROM alliances WHERE factionID = :factionID", "allianceID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceID = :allianceID WHERE factionID = :factionID", array(":factionID" => $factionID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param string $allianceName
	 * @param int $allianceID
	 */
	public function updateAllianceNameByAllianceID(string $allianceName, int $allianceID) {
		$exists = $this->db->queryField("SELECT allianceName FROM alliances WHERE allianceID = :allianceID", "allianceName", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceName = :allianceName WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":allianceName" => $allianceName));
		}
	}

	/**
	 * @param string $allianceName
	 * @param int $executorCorporationID
	 */
	public function updateAllianceNameByExecutorCorporationID(string $allianceName, int $executorCorporationID) {
		$exists = $this->db->queryField("SELECT allianceName FROM alliances WHERE executorCorporationID = :executorCorporationID", "allianceName", array(":executorCorporationID" => $executorCorporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceName = :allianceName WHERE executorCorporationID = :executorCorporationID", array(":executorCorporationID" => $executorCorporationID, ":allianceName" => $allianceName));
		}
	}

	/**
	 * @param string $allianceName
	 * @param int $factionID
	 */
	public function updateAllianceNameByFactionID(string $allianceName, int $factionID) {
		$exists = $this->db->queryField("SELECT allianceName FROM alliances WHERE factionID = :factionID", "allianceName", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceName = :allianceName WHERE factionID = :factionID", array(":factionID" => $factionID, ":allianceName" => $allianceName));
		}
	}

	/**
	 * @param string $allianceTicker
	 * @param int $allianceID
	 */
	public function updateAllianceTickerByAllianceID(string $allianceTicker, int $allianceID) {
		$exists = $this->db->queryField("SELECT allianceTicker FROM alliances WHERE allianceID = :allianceID", "allianceTicker", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceTicker = :allianceTicker WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":allianceTicker" => $allianceTicker));
		}
	}

	/**
	 * @param string $allianceTicker
	 * @param string $allianceName
	 */
	public function updateAllianceTickerByAllianceName(string $allianceTicker, string $allianceName) {
		$exists = $this->db->queryField("SELECT allianceTicker FROM alliances WHERE allianceName = :allianceName", "allianceTicker", array(":allianceName" => $allianceName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceTicker = :allianceTicker WHERE allianceName = :allianceName", array(":allianceName" => $allianceName, ":allianceTicker" => $allianceTicker));
		}
	}

	/**
	 * @param string $allianceTicker
	 * @param int $executorCorporationID
	 */
	public function updateAllianceTickerByExecutorCorporationID(string $allianceTicker, int $executorCorporationID) {
		$exists = $this->db->queryField("SELECT allianceTicker FROM alliances WHERE executorCorporationID = :executorCorporationID", "allianceTicker", array(":executorCorporationID" => $executorCorporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceTicker = :allianceTicker WHERE executorCorporationID = :executorCorporationID", array(":executorCorporationID" => $executorCorporationID, ":allianceTicker" => $allianceTicker));
		}
	}

	/**
	 * @param string $allianceTicker
	 * @param int $factionID
	 */
	public function updateAllianceTickerByFactionID(string $allianceTicker, int $factionID) {
		$exists = $this->db->queryField("SELECT allianceTicker FROM alliances WHERE factionID = :factionID", "allianceTicker", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET allianceTicker = :allianceTicker WHERE factionID = :factionID", array(":factionID" => $factionID, ":allianceTicker" => $allianceTicker));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $allianceID
	 */
	public function updateDateAddedByAllianceID(string $dateAdded, int $allianceID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM alliances WHERE allianceID = :allianceID", "dateAdded", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET dateAdded = :dateAdded WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param string $allianceName
	 */
	public function updateDateAddedByAllianceName(string $dateAdded, string $allianceName) {
		$exists = $this->db->queryField("SELECT dateAdded FROM alliances WHERE allianceName = :allianceName", "dateAdded", array(":allianceName" => $allianceName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET dateAdded = :dateAdded WHERE allianceName = :allianceName", array(":allianceName" => $allianceName, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $executorCorporationID
	 */
	public function updateDateAddedByExecutorCorporationID(string $dateAdded, int $executorCorporationID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM alliances WHERE executorCorporationID = :executorCorporationID", "dateAdded", array(":executorCorporationID" => $executorCorporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET dateAdded = :dateAdded WHERE executorCorporationID = :executorCorporationID", array(":executorCorporationID" => $executorCorporationID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $factionID
	 */
	public function updateDateAddedByFactionID(string $dateAdded, int $factionID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM alliances WHERE factionID = :factionID", "dateAdded", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET dateAdded = :dateAdded WHERE factionID = :factionID", array(":factionID" => $factionID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param int $executorCorporationID
	 * @param int $allianceID
	 */
	public function updateExecutorCorporationIDByAllianceID(int $executorCorporationID, int $allianceID) {
		$exists = $this->db->queryField("SELECT executorCorporationID FROM alliances WHERE allianceID = :allianceID", "executorCorporationID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET executorCorporationID = :executorCorporationID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":executorCorporationID" => $executorCorporationID));
		}
	}

	/**
	 * @param int $executorCorporationID
	 * @param string $allianceName
	 */
	public function updateExecutorCorporationIDByAllianceName(int $executorCorporationID, string $allianceName) {
		$exists = $this->db->queryField("SELECT executorCorporationID FROM alliances WHERE allianceName = :allianceName", "executorCorporationID", array(":allianceName" => $allianceName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET executorCorporationID = :executorCorporationID WHERE allianceName = :allianceName", array(":allianceName" => $allianceName, ":executorCorporationID" => $executorCorporationID));
		}
	}

	/**
	 * @param int $executorCorporationID
	 * @param int $factionID
	 */
	public function updateExecutorCorporationIDByFactionID(int $executorCorporationID, int $factionID) {
		$exists = $this->db->queryField("SELECT executorCorporationID FROM alliances WHERE factionID = :factionID", "executorCorporationID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET executorCorporationID = :executorCorporationID WHERE factionID = :factionID", array(":factionID" => $factionID, ":executorCorporationID" => $executorCorporationID));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $allianceID
	 */
	public function updateFactionIDByAllianceID(int $factionID, int $allianceID) {
		$exists = $this->db->queryField("SELECT factionID FROM alliances WHERE allianceID = :allianceID", "factionID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET factionID = :factionID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param string $allianceName
	 */
	public function updateFactionIDByAllianceName(int $factionID, string $allianceName) {
		$exists = $this->db->queryField("SELECT factionID FROM alliances WHERE allianceName = :allianceName", "factionID", array(":allianceName" => $allianceName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET factionID = :factionID WHERE allianceName = :allianceName", array(":allianceName" => $allianceName, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $executorCorporationID
	 */
	public function updateFactionIDByExecutorCorporationID(int $factionID, int $executorCorporationID) {
		$exists = $this->db->queryField("SELECT factionID FROM alliances WHERE executorCorporationID = :executorCorporationID", "factionID", array(":executorCorporationID" => $executorCorporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET factionID = :factionID WHERE executorCorporationID = :executorCorporationID", array(":executorCorporationID" => $executorCorporationID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $allianceID
	 */
	public function updateLastUpdatedByAllianceID(string $lastUpdated, int $allianceID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM alliances WHERE allianceID = :allianceID", "lastUpdated", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET lastUpdated = :lastUpdated WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param string $allianceName
	 */
	public function updateLastUpdatedByAllianceName(string $lastUpdated, string $allianceName) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM alliances WHERE allianceName = :allianceName", "lastUpdated", array(":allianceName" => $allianceName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET lastUpdated = :lastUpdated WHERE allianceName = :allianceName", array(":allianceName" => $allianceName, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $executorCorporationID
	 */
	public function updateLastUpdatedByExecutorCorporationID(string $lastUpdated, int $executorCorporationID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM alliances WHERE executorCorporationID = :executorCorporationID", "lastUpdated", array(":executorCorporationID" => $executorCorporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET lastUpdated = :lastUpdated WHERE executorCorporationID = :executorCorporationID", array(":executorCorporationID" => $executorCorporationID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $factionID
	 */
	public function updateLastUpdatedByFactionID(string $lastUpdated, int $factionID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM alliances WHERE factionID = :factionID", "lastUpdated", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE alliances SET lastUpdated = :lastUpdated WHERE factionID = :factionID", array(":factionID" => $factionID, ":lastUpdated" => $lastUpdated));
		}
	}
}