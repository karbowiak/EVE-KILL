<?php
namespace App\Model;

use Slim\Container;

class corporations {

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
		return $this->db->query("SELECT * FROM corporations WHERE allianceID = :allianceID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getAllByCeoID(int $ceoID) {
		return $this->db->query("SELECT * FROM corporations WHERE ceoID = :ceoID", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getAllByCorporationID(int $corporationID) {
		return $this->db->query("SELECT * FROM corporations WHERE corporationID = :corporationID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getAllByCorporationName(string $corporationName) {
		return $this->db->query("SELECT * FROM corporations WHERE corporationName = :corporationName", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getAllByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->query("SELECT * FROM corporations WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllByFactionID(int $factionID) {
		return $this->db->query("SELECT * FROM corporations WHERE factionID = :factionID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getAllianceIDByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT allianceID FROM corporations WHERE ceoID = :ceoID", "allianceID", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getAllianceIDByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT allianceID FROM corporations WHERE corporationID = :corporationID", "allianceID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getAllianceIDByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT allianceID FROM corporations WHERE corporationName = :corporationName", "allianceID", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getAllianceIDByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT allianceID FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "allianceID", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getAllianceIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT allianceID FROM corporations WHERE factionID = :factionID", "allianceID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCeoIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT ceoID FROM corporations WHERE allianceID = :allianceID", "ceoID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getCeoIDByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT ceoID FROM corporations WHERE corporationID = :corporationID", "ceoID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getCeoIDByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT ceoID FROM corporations WHERE corporationName = :corporationName", "ceoID", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getCeoIDByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT ceoID FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "ceoID", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getCeoIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT ceoID FROM corporations WHERE factionID = :factionID", "ceoID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCorporationIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT corporationID FROM corporations WHERE allianceID = :allianceID", "corporationID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getCorporationIDByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT corporationID FROM corporations WHERE ceoID = :ceoID", "corporationID", array(":ceoID" => $ceoID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getCorporationIDByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT corporationID FROM corporations WHERE corporationName = :corporationName", "corporationID", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getCorporationIDByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT corporationID FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "corporationID", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getCorporationIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT corporationID FROM corporations WHERE factionID = :factionID", "corporationID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCorporationNameByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT corporationName FROM corporations WHERE allianceID = :allianceID", "corporationName", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getCorporationNameByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT corporationName FROM corporations WHERE ceoID = :ceoID", "corporationName", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getCorporationNameByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT corporationName FROM corporations WHERE corporationID = :corporationID", "corporationName", array(":corporationID" => $corporationID));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getCorporationNameByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT corporationName FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "corporationName", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getCorporationNameByFactionID(int $factionID) {
		return $this->db->queryField("SELECT corporationName FROM corporations WHERE factionID = :factionID", "corporationName", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCorpTickerByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT corpTicker FROM corporations WHERE allianceID = :allianceID", "corpTicker", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getCorpTickerByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT corpTicker FROM corporations WHERE ceoID = :ceoID", "corpTicker", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getCorpTickerByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT corpTicker FROM corporations WHERE corporationID = :corporationID", "corpTicker", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getCorpTickerByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT corpTicker FROM corporations WHERE corporationName = :corporationName", "corpTicker", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getCorpTickerByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT corpTicker FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "corpTicker", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getCorpTickerByFactionID(int $factionID) {
		return $this->db->queryField("SELECT corpTicker FROM corporations WHERE factionID = :factionID", "corpTicker", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCreationDateByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT creationDate FROM corporations WHERE allianceID = :allianceID", "creationDate", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getCreationDateByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT creationDate FROM corporations WHERE ceoID = :ceoID", "creationDate", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getCreationDateByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT creationDate FROM corporations WHERE corporationID = :corporationID", "creationDate", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getCreationDateByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT creationDate FROM corporations WHERE corporationName = :corporationName", "creationDate", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getCreationDateByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT creationDate FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "creationDate", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getCreationDateByFactionID(int $factionID) {
		return $this->db->queryField("SELECT creationDate FROM corporations WHERE factionID = :factionID", "creationDate", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getCreatorCharacterIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE allianceID = :allianceID", "creatorCharacterID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getCreatorCharacterIDByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE ceoID = :ceoID", "creatorCharacterID", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getCreatorCharacterIDByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE corporationID = :corporationID", "creatorCharacterID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getCreatorCharacterIDByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE corporationName = :corporationName", "creatorCharacterID", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $factionID
	 */
	public function getCreatorCharacterIDByFactionID(int $factionID) {
		return $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE factionID = :factionID", "creatorCharacterID", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getDateAddedByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT dateAdded FROM corporations WHERE allianceID = :allianceID", "dateAdded", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getDateAddedByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT dateAdded FROM corporations WHERE ceoID = :ceoID", "dateAdded", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getDateAddedByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT dateAdded FROM corporations WHERE corporationID = :corporationID", "dateAdded", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getDateAddedByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT dateAdded FROM corporations WHERE corporationName = :corporationName", "dateAdded", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getDateAddedByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT dateAdded FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "dateAdded", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getDateAddedByFactionID(int $factionID) {
		return $this->db->queryField("SELECT dateAdded FROM corporations WHERE factionID = :factionID", "dateAdded", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getDescriptionByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT description FROM corporations WHERE allianceID = :allianceID", "description", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getDescriptionByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT description FROM corporations WHERE ceoID = :ceoID", "description", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getDescriptionByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT description FROM corporations WHERE corporationID = :corporationID", "description", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getDescriptionByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT description FROM corporations WHERE corporationName = :corporationName", "description", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getDescriptionByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT description FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "description", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getDescriptionByFactionID(int $factionID) {
		return $this->db->queryField("SELECT description FROM corporations WHERE factionID = :factionID", "description", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getFactionIDByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT factionID FROM corporations WHERE allianceID = :allianceID", "factionID", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getFactionIDByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT factionID FROM corporations WHERE ceoID = :ceoID", "factionID", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getFactionIDByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT factionID FROM corporations WHERE corporationID = :corporationID", "factionID", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getFactionIDByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT factionID FROM corporations WHERE corporationName = :corporationName", "factionID", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getFactionIDByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT factionID FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "factionID", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getLastUpdatedByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT lastUpdated FROM corporations WHERE allianceID = :allianceID", "lastUpdated", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getLastUpdatedByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT lastUpdated FROM corporations WHERE ceoID = :ceoID", "lastUpdated", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getLastUpdatedByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT lastUpdated FROM corporations WHERE corporationID = :corporationID", "lastUpdated", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getLastUpdatedByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT lastUpdated FROM corporations WHERE corporationName = :corporationName", "lastUpdated", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getLastUpdatedByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT lastUpdated FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "lastUpdated", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getLastUpdatedByFactionID(int $factionID) {
		return $this->db->queryField("SELECT lastUpdated FROM corporations WHERE factionID = :factionID", "lastUpdated", array(":factionID" => $factionID));
	}

	/**
	 * @param int $allianceID
	 */
	public function getMemberCountByAllianceID(int $allianceID) {
		return $this->db->queryField("SELECT memberCount FROM corporations WHERE allianceID = :allianceID", "memberCount", array(":allianceID" => $allianceID));
	}

	/**
	 * @param int $ceoID
	 */
	public function getMemberCountByCeoID(int $ceoID) {
		return $this->db->queryField("SELECT memberCount FROM corporations WHERE ceoID = :ceoID", "memberCount", array(":ceoID" => $ceoID));
	}

	/**
	 * @param int $corporationID
	 */
	public function getMemberCountByCorporationID(int $corporationID) {
		return $this->db->queryField("SELECT memberCount FROM corporations WHERE corporationID = :corporationID", "memberCount", array(":corporationID" => $corporationID));
	}

	/**
	 * @param string $corporationName
	 */
	public function getMemberCountByCorporationName(string $corporationName) {
		return $this->db->queryField("SELECT memberCount FROM corporations WHERE corporationName = :corporationName", "memberCount", array(":corporationName" => $corporationName));
	}

	/**
	 * @param int $creatorCharacterID
	 */
	public function getMemberCountByCreatorCharacterID(int $creatorCharacterID) {
		return $this->db->queryField("SELECT memberCount FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "memberCount", array(":creatorCharacterID" => $creatorCharacterID));
	}

	/**
	 * @param int $factionID
	 */
	public function getMemberCountByFactionID(int $factionID) {
		return $this->db->queryField("SELECT memberCount FROM corporations WHERE factionID = :factionID", "memberCount", array(":factionID" => $factionID));
	}

	/**
	 * @param int $corporationID
	 * @param int $allianceID
	 * @param int $factionID
	 * @param string $corporationName
	 * @param int $ceoID
	 * @param string $corpTicker
	 * @param int $memberCount
	 * @param string $description
	 * @param string $creationDate
	 * @param int $creatorCharacterID
	 */
	public function insertIntoCorporations(int $corporationID, int $allianceID, int $factionID, string $corporationName, int $ceoID, string $corpTicker, int $memberCount, string $description, string $creationDate, int $creatorCharacterID) {
		return $this->db->execute("INSERT INTO corporations (corporationID, allianceID, factionID, corporationName, ceoID, corpTicker, memberCount, description, creationDate, creatorCharacterID) VALUES (:corporationID, :allianceID, :factionID, :corporationName, :ceoID, :corpTicker, :memberCount, :description, :creationDate, :creatorCharacterID)", array(":corporationID" => $corporationID, ":allianceID" => $allianceID, ":factionID" => $factionID, ":corporationName" => $corporationName, ":ceoID" => $ceoID, ":corpTicker" => $corpTicker, ":memberCount" => $memberCount, ":description" => $description, ":creationDate" => $creationDate, ":creatorCharacterID" => $creatorCharacterID));
	}
}