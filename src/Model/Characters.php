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
}