<?php
namespace App\Model;

use Slim\Container;

class characters {

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
		return $this->db->query("SELECT * FROM characters WHERE allianceID = :allianceID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $characterID
	 */
	public function getAllByCharacterID(int $characterID) {
		return $this->db->query("SELECT * FROM characters WHERE characterID = :characterID", array(":characterID" => $characterID));
	}

	/**
	 * @param string $characterName
	 */
	public function getAllByCharacterName(string $characterName) {
		return $this->db->query("SELECT * FROM characters WHERE characterName = :characterName", array(":characterName" => $characterName));
	}

	/**
	 * @param int $corporationID
	 */
	public function getAllByCorporationID(int $corporationID) {
		return $this->db->query("SELECT * FROM characters WHERE corporationID = :corporationID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllByFactionID(int $factionID) {
		return $this->db->query("SELECT * FROM characters WHERE factionID = :factionID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $characterID
	 */
	public function getAllianceIDByCharacterID(int $characterID) {
		return $this->db->queryField("SELECT allianceID FROM characters WHERE characterID = :characterID", "allianceID", array(":characterID" => $characterID));
	}

	/**
	 * @param string $characterName
	 */
	public function getAllianceIDByCharacterName(string $characterName) {
		return $this->db->queryField("SELECT allianceID FROM characters WHERE characterName = :characterName", "allianceID", array(":characterName" => $characterName));
	}

	/**
	 * @param int $corporationID
	 */
	public function getAllianceIDByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT allianceID FROM characters WHERE corporationID = :corporationID", "allianceID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllianceIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT allianceID FROM characters WHERE factionID = :factionID", "allianceID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCharacterIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT characterID FROM characters WHERE allianceID = :allianceID", "characterID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param string $characterName
	 */
	public function getCharacterIDByCharacterName(string $characterName) {
		return $this->db->queryField("SELECT characterID FROM characters WHERE characterName = :characterName", "characterID", array(":characterName" => $characterName));
	}

	/**
	 * @param int $corporationID
	 */
	public function getCharacterIDByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT characterID FROM characters WHERE corporationID = :corporationID", "characterID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getCharacterIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT characterID FROM characters WHERE factionID = :factionID", "characterID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCharacterNameByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT characterName FROM characters WHERE allianceID = :allianceID", "characterName", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $characterID
	 */
	public function getCharacterNameByCharacterID(int $characterID) {
		return $this->db->queryField("SELECT characterName FROM characters WHERE characterID = :characterID", "characterName", array(":characterID" => $characterID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getCharacterNameByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT characterName FROM characters WHERE corporationID = :corporationID", "characterName", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getCharacterNameByFactionID(int $factionID) {
		return $this->db->queryField("SELECT characterName FROM characters WHERE factionID = :factionID", "characterName", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCorporationIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT corporationID FROM characters WHERE allianceID = :allianceID", "corporationID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $characterID
	 */
	public function getCorporationIDByCharacterID(int $characterID) {
		return $this->db->queryField("SELECT corporationID FROM characters WHERE characterID = :characterID", "corporationID", array(":characterID" => $characterID));
	}

	/**
	 * @param string $characterName
	 */
	public function getCorporationIDByCharacterName(string $characterName) {
		return $this->db->queryField("SELECT corporationID FROM characters WHERE characterName = :characterName", "corporationID", array(":characterName" => $characterName));
	}

	/**
	 * @param int $factionID
	 */
	public function getCorporationIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT corporationID FROM characters WHERE factionID = :factionID", "corporationID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getDateAddedByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT dateAdded FROM characters WHERE allianceID = :allianceID", "dateAdded", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $characterID
	 */
	public function getDateAddedByCharacterID(int $characterID) {
		return $this->db->queryField("SELECT dateAdded FROM characters WHERE characterID = :characterID", "dateAdded", array(":characterID" => $characterID));
	}

	/**
	 * @param string $characterName
	 */
	public function getDateAddedByCharacterName(string $characterName) {
		return $this->db->queryField("SELECT dateAdded FROM characters WHERE characterName = :characterName", "dateAdded", array(":characterName" => $characterName));
	}

	/**
	 * @param int $corporationID
	 */
	public function getDateAddedByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT dateAdded FROM characters WHERE corporationID = :corporationID", "dateAdded", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getDateAddedByFactionID(int $factionID) {
		return $this->db->queryField("SELECT dateAdded FROM characters WHERE factionID = :factionID", "dateAdded", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getFactionIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT factionID FROM characters WHERE allianceID = :allianceID", "factionID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $characterID
	 */
	public function getFactionIDByCharacterID(int $characterID) {
		return $this->db->queryField("SELECT factionID FROM characters WHERE characterID = :characterID", "factionID", array(":characterID" => $characterID));
	}

	/**
	 * @param string $characterName
	 */
	public function getFactionIDByCharacterName(string $characterName) {
		return $this->db->queryField("SELECT factionID FROM characters WHERE characterName = :characterName", "factionID", array(":characterName" => $characterName));
	}

	/**
	 * @param int $corporationID
	 */
	public function getFactionIDByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT factionID FROM characters WHERE corporationID = :corporationID", "factionID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getHistoryByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT history FROM characters WHERE allianceID = :allianceID", "history", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $characterID
	 */
	public function getHistoryByCharacterID(int $characterID) {
		return $this->db->queryField("SELECT history FROM characters WHERE characterID = :characterID", "history", array(":characterID" => $characterID));
	}

	/**
	 * @param string $characterName
	 */
	public function getHistoryByCharacterName(string $characterName) {
		return $this->db->queryField("SELECT history FROM characters WHERE characterName = :characterName", "history", array(":characterName" => $characterName));
	}

	/**
	 * @param int $corporationID
	 */
	public function getHistoryByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT history FROM characters WHERE corporationID = :corporationID", "history", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getHistoryByFactionID(int $factionID) {
		return $this->db->queryField("SELECT history FROM characters WHERE factionID = :factionID", "history", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getLastUpdatedByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT lastUpdated FROM characters WHERE allianceID = :allianceID", "lastUpdated", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $characterID
	 */
	public function getLastUpdatedByCharacterID(int $characterID) {
		return $this->db->queryField("SELECT lastUpdated FROM characters WHERE characterID = :characterID", "lastUpdated", array(":characterID" => $characterID));
	}

	/**
	 * @param string $characterName
	 */
	public function getLastUpdatedByCharacterName(string $characterName) {
		return $this->db->queryField("SELECT lastUpdated FROM characters WHERE characterName = :characterName", "lastUpdated", array(":characterName" => $characterName));
	}

	/**
	 * @param int $corporationID
	 */
	public function getLastUpdatedByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT lastUpdated FROM characters WHERE corporationID = :corporationID", "lastUpdated", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $factionID
	 */
	public function getLastUpdatedByFactionID(int $factionID) {
		return $this->db->queryField("SELECT lastUpdated FROM characters WHERE factionID = :factionID", "lastUpdated", array(":factionID" => $factionID));
	}

	/**
	 * @param int $characterID
	 * @param int $corporationID
	 * @param int $allianceID
	 * @param int $factionID
	 * @param string $characterName
	 * @param string $history
	 */
	public function insertIntoCharacters(int $characterID, int $corporationID, int $allianceID, int $factionID, string $characterName, string $history) {
		return $this->db->execute("INSERT INTO characters (characterID, corporationID, allianceID, factionID, characterName, history) VALUES (:characterID, :corporationID, :allianceID, :factionID, :characterName, :history)", array(":characterID" => $characterID, ":corporationID" => $corporationID, ":allianceID" => $allianceID, ":factionID" => $factionID, ":characterName" => $characterName, ":history" => $history));
	}

	/**
	 * @param int $allianceID
	 * @param int $characterID
	 */
	public function updateAllianceIDByCharacterID(int $allianceID, int $characterID) {
		$exists = $this->db->queryField("SELECT allianceID FROM characters WHERE characterID = :characterID", "allianceID", array(":characterID" => $characterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET allianceID = :allianceID WHERE characterID = :characterID", array(":characterID" => $characterID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param string $characterName
	 */
	public function updateAllianceIDByCharacterName(int $allianceID, string $characterName) {
		$exists = $this->db->queryField("SELECT allianceID FROM characters WHERE characterName = :characterName", "allianceID", array(":characterName" => $characterName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET allianceID = :allianceID WHERE characterName = :characterName", array(":characterName" => $characterName, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param int $corporationID
	 */
	public function updateAllianceIDByCorporationID(int $allianceID, int $corporationID) {
		$exists = $this->db->queryField("SELECT allianceID FROM characters WHERE corporationID = :corporationID", "allianceID", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET allianceID = :allianceID WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param int $factionID
	 */
	public function updateAllianceIDByFactionID(int $allianceID, int $factionID) {
		$exists = $this->db->queryField("SELECT allianceID FROM characters WHERE factionID = :factionID", "allianceID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET allianceID = :allianceID WHERE factionID = :factionID", array(":factionID" => $factionID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $characterID
	 * @param int $allianceID
	 */
	public function updateCharacterIDByAllianceID(int $characterID, int $allianceID) {
		$exists = $this->db->queryField("SELECT characterID FROM characters WHERE allianceID = :allianceID", "characterID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET characterID = :characterID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":characterID" => $characterID));
		}
	}

	/**
	 * @param int $characterID
	 * @param string $characterName
	 */
	public function updateCharacterIDByCharacterName(int $characterID, string $characterName) {
		$exists = $this->db->queryField("SELECT characterID FROM characters WHERE characterName = :characterName", "characterID", array(":characterName" => $characterName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET characterID = :characterID WHERE characterName = :characterName", array(":characterName" => $characterName, ":characterID" => $characterID));
		}
	}

	/**
	 * @param int $characterID
	 * @param int $corporationID
	 */
	public function updateCharacterIDByCorporationID(int $characterID, int $corporationID) {
		$exists = $this->db->queryField("SELECT characterID FROM characters WHERE corporationID = :corporationID", "characterID", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET characterID = :characterID WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":characterID" => $characterID));
		}
	}

	/**
	 * @param int $characterID
	 * @param int $factionID
	 */
	public function updateCharacterIDByFactionID(int $characterID, int $factionID) {
		$exists = $this->db->queryField("SELECT characterID FROM characters WHERE factionID = :factionID", "characterID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET characterID = :characterID WHERE factionID = :factionID", array(":factionID" => $factionID, ":characterID" => $characterID));
		}
	}

	/**
	 * @param string $characterName
	 * @param int $allianceID
	 */
	public function updateCharacterNameByAllianceID(string $characterName, int $allianceID) {
		$exists = $this->db->queryField("SELECT characterName FROM characters WHERE allianceID = :allianceID", "characterName", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET characterName = :characterName WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":characterName" => $characterName));
		}
	}

	/**
	 * @param string $characterName
	 * @param int $characterID
	 */
	public function updateCharacterNameByCharacterID(string $characterName, int $characterID) {
		$exists = $this->db->queryField("SELECT characterName FROM characters WHERE characterID = :characterID", "characterName", array(":characterID" => $characterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET characterName = :characterName WHERE characterID = :characterID", array(":characterID" => $characterID, ":characterName" => $characterName));
		}
	}

	/**
	 * @param string $characterName
	 * @param int $corporationID
	 */
	public function updateCharacterNameByCorporationID(string $characterName, int $corporationID) {
		$exists = $this->db->queryField("SELECT characterName FROM characters WHERE corporationID = :corporationID", "characterName", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET characterName = :characterName WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":characterName" => $characterName));
		}
	}

	/**
	 * @param string $characterName
	 * @param int $factionID
	 */
	public function updateCharacterNameByFactionID(string $characterName, int $factionID) {
		$exists = $this->db->queryField("SELECT characterName FROM characters WHERE factionID = :factionID", "characterName", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET characterName = :characterName WHERE factionID = :factionID", array(":factionID" => $factionID, ":characterName" => $characterName));
		}
	}

	/**
	 * @param int $corporationID
	 * @param int $allianceID
	 */
	public function updateCorporationIDByAllianceID(int $corporationID, int $allianceID) {
		$exists = $this->db->queryField("SELECT corporationID FROM characters WHERE allianceID = :allianceID", "corporationID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET corporationID = :corporationID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param int $corporationID
	 * @param int $characterID
	 */
	public function updateCorporationIDByCharacterID(int $corporationID, int $characterID) {
		$exists = $this->db->queryField("SELECT corporationID FROM characters WHERE characterID = :characterID", "corporationID", array(":characterID" => $characterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET corporationID = :corporationID WHERE characterID = :characterID", array(":characterID" => $characterID, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param int $corporationID
	 * @param string $characterName
	 */
	public function updateCorporationIDByCharacterName(int $corporationID, string $characterName) {
		$exists = $this->db->queryField("SELECT corporationID FROM characters WHERE characterName = :characterName", "corporationID", array(":characterName" => $characterName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET corporationID = :corporationID WHERE characterName = :characterName", array(":characterName" => $characterName, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param int $corporationID
	 * @param int $factionID
	 */
	public function updateCorporationIDByFactionID(int $corporationID, int $factionID) {
		$exists = $this->db->queryField("SELECT corporationID FROM characters WHERE factionID = :factionID", "corporationID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET corporationID = :corporationID WHERE factionID = :factionID", array(":factionID" => $factionID, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $allianceID
	 */
	public function updateDateAddedByAllianceID(string $dateAdded, int $allianceID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM characters WHERE allianceID = :allianceID", "dateAdded", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET dateAdded = :dateAdded WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $characterID
	 */
	public function updateDateAddedByCharacterID(string $dateAdded, int $characterID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM characters WHERE characterID = :characterID", "dateAdded", array(":characterID" => $characterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET dateAdded = :dateAdded WHERE characterID = :characterID", array(":characterID" => $characterID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param string $characterName
	 */
	public function updateDateAddedByCharacterName(string $dateAdded, string $characterName) {
		$exists = $this->db->queryField("SELECT dateAdded FROM characters WHERE characterName = :characterName", "dateAdded", array(":characterName" => $characterName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET dateAdded = :dateAdded WHERE characterName = :characterName", array(":characterName" => $characterName, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $corporationID
	 */
	public function updateDateAddedByCorporationID(string $dateAdded, int $corporationID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM characters WHERE corporationID = :corporationID", "dateAdded", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET dateAdded = :dateAdded WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $factionID
	 */
	public function updateDateAddedByFactionID(string $dateAdded, int $factionID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM characters WHERE factionID = :factionID", "dateAdded", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET dateAdded = :dateAdded WHERE factionID = :factionID", array(":factionID" => $factionID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $allianceID
	 */
	public function updateFactionIDByAllianceID(int $factionID, int $allianceID) {
		$exists = $this->db->queryField("SELECT factionID FROM characters WHERE allianceID = :allianceID", "factionID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET factionID = :factionID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $characterID
	 */
	public function updateFactionIDByCharacterID(int $factionID, int $characterID) {
		$exists = $this->db->queryField("SELECT factionID FROM characters WHERE characterID = :characterID", "factionID", array(":characterID" => $characterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET factionID = :factionID WHERE characterID = :characterID", array(":characterID" => $characterID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param string $characterName
	 */
	public function updateFactionIDByCharacterName(int $factionID, string $characterName) {
		$exists = $this->db->queryField("SELECT factionID FROM characters WHERE characterName = :characterName", "factionID", array(":characterName" => $characterName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET factionID = :factionID WHERE characterName = :characterName", array(":characterName" => $characterName, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $corporationID
	 */
	public function updateFactionIDByCorporationID(int $factionID, int $corporationID) {
		$exists = $this->db->queryField("SELECT factionID FROM characters WHERE corporationID = :corporationID", "factionID", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET factionID = :factionID WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param string $history
	 * @param int $allianceID
	 */
	public function updateHistoryByAllianceID(string $history, int $allianceID) {
		$exists = $this->db->queryField("SELECT history FROM characters WHERE allianceID = :allianceID", "history", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET history = :history WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":history" => $history));
		}
	}

	/**
	 * @param string $history
	 * @param int $characterID
	 */
	public function updateHistoryByCharacterID(string $history, int $characterID) {
		$exists = $this->db->queryField("SELECT history FROM characters WHERE characterID = :characterID", "history", array(":characterID" => $characterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET history = :history WHERE characterID = :characterID", array(":characterID" => $characterID, ":history" => $history));
		}
	}

	/**
	 * @param string $history
	 * @param string $characterName
	 */
	public function updateHistoryByCharacterName(string $history, string $characterName) {
		$exists = $this->db->queryField("SELECT history FROM characters WHERE characterName = :characterName", "history", array(":characterName" => $characterName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET history = :history WHERE characterName = :characterName", array(":characterName" => $characterName, ":history" => $history));
		}
	}

	/**
	 * @param string $history
	 * @param int $corporationID
	 */
	public function updateHistoryByCorporationID(string $history, int $corporationID) {
		$exists = $this->db->queryField("SELECT history FROM characters WHERE corporationID = :corporationID", "history", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET history = :history WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":history" => $history));
		}
	}

	/**
	 * @param string $history
	 * @param int $factionID
	 */
	public function updateHistoryByFactionID(string $history, int $factionID) {
		$exists = $this->db->queryField("SELECT history FROM characters WHERE factionID = :factionID", "history", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET history = :history WHERE factionID = :factionID", array(":factionID" => $factionID, ":history" => $history));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $allianceID
	 */
	public function updateLastUpdatedByAllianceID(string $lastUpdated, int $allianceID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM characters WHERE allianceID = :allianceID", "lastUpdated", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET lastUpdated = :lastUpdated WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $characterID
	 */
	public function updateLastUpdatedByCharacterID(string $lastUpdated, int $characterID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM characters WHERE characterID = :characterID", "lastUpdated", array(":characterID" => $characterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET lastUpdated = :lastUpdated WHERE characterID = :characterID", array(":characterID" => $characterID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param string $characterName
	 */
	public function updateLastUpdatedByCharacterName(string $lastUpdated, string $characterName) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM characters WHERE characterName = :characterName", "lastUpdated", array(":characterName" => $characterName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET lastUpdated = :lastUpdated WHERE characterName = :characterName", array(":characterName" => $characterName, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $corporationID
	 */
	public function updateLastUpdatedByCorporationID(string $lastUpdated, int $corporationID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM characters WHERE corporationID = :corporationID", "lastUpdated", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET lastUpdated = :lastUpdated WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $factionID
	 */
	public function updateLastUpdatedByFactionID(string $lastUpdated, int $factionID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM characters WHERE factionID = :factionID", "lastUpdated", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE characters SET lastUpdated = :lastUpdated WHERE factionID = :factionID", array(":factionID" => $factionID, ":lastUpdated" => $lastUpdated));
		}
	}
}