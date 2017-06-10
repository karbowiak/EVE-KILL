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

	/**
	 * @param int $allianceID
	 * @param int $ceoID
	 */
	public function updateAllianceIDByCeoID(int $allianceID, int $ceoID) {
		$exists = $this->db->queryField("SELECT allianceID FROM corporations WHERE ceoID = :ceoID", "allianceID", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET allianceID = :allianceID WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param int $corporationID
	 */
	public function updateAllianceIDByCorporationID(int $allianceID, int $corporationID) {
		$exists = $this->db->queryField("SELECT allianceID FROM corporations WHERE corporationID = :corporationID", "allianceID", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET allianceID = :allianceID WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param string $corporationName
	 */
	public function updateAllianceIDByCorporationName(int $allianceID, string $corporationName) {
		$exists = $this->db->queryField("SELECT allianceID FROM corporations WHERE corporationName = :corporationName", "allianceID", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET allianceID = :allianceID WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param int $creatorCharacterID
	 */
	public function updateAllianceIDByCreatorCharacterID(int $allianceID, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT allianceID FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "allianceID", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET allianceID = :allianceID WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $allianceID
	 * @param int $factionID
	 */
	public function updateAllianceIDByFactionID(int $allianceID, int $factionID) {
		$exists = $this->db->queryField("SELECT allianceID FROM corporations WHERE factionID = :factionID", "allianceID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET allianceID = :allianceID WHERE factionID = :factionID", array(":factionID" => $factionID, ":allianceID" => $allianceID));
		}
	}

	/**
	 * @param int $ceoID
	 * @param int $allianceID
	 */
	public function updateCeoIDByAllianceID(int $ceoID, int $allianceID) {
		$exists = $this->db->queryField("SELECT ceoID FROM corporations WHERE allianceID = :allianceID", "ceoID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET ceoID = :ceoID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":ceoID" => $ceoID));
		}
	}

	/**
	 * @param int $ceoID
	 * @param int $corporationID
	 */
	public function updateCeoIDByCorporationID(int $ceoID, int $corporationID) {
		$exists = $this->db->queryField("SELECT ceoID FROM corporations WHERE corporationID = :corporationID", "ceoID", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET ceoID = :ceoID WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":ceoID" => $ceoID));
		}
	}

	/**
	 * @param int $ceoID
	 * @param string $corporationName
	 */
	public function updateCeoIDByCorporationName(int $ceoID, string $corporationName) {
		$exists = $this->db->queryField("SELECT ceoID FROM corporations WHERE corporationName = :corporationName", "ceoID", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET ceoID = :ceoID WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":ceoID" => $ceoID));
		}
	}

	/**
	 * @param int $ceoID
	 * @param int $creatorCharacterID
	 */
	public function updateCeoIDByCreatorCharacterID(int $ceoID, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT ceoID FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "ceoID", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET ceoID = :ceoID WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":ceoID" => $ceoID));
		}
	}

	/**
	 * @param int $ceoID
	 * @param int $factionID
	 */
	public function updateCeoIDByFactionID(int $ceoID, int $factionID) {
		$exists = $this->db->queryField("SELECT ceoID FROM corporations WHERE factionID = :factionID", "ceoID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET ceoID = :ceoID WHERE factionID = :factionID", array(":factionID" => $factionID, ":ceoID" => $ceoID));
		}
	}

	/**
	 * @param int $corporationID
	 * @param int $allianceID
	 */
	public function updateCorporationIDByAllianceID(int $corporationID, int $allianceID) {
		$exists = $this->db->queryField("SELECT corporationID FROM corporations WHERE allianceID = :allianceID", "corporationID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationID = :corporationID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param int $corporationID
	 * @param int $ceoID
	 */
	public function updateCorporationIDByCeoID(int $corporationID, int $ceoID) {
		$exists = $this->db->queryField("SELECT corporationID FROM corporations WHERE ceoID = :ceoID", "corporationID", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationID = :corporationID WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param int $corporationID
	 * @param string $corporationName
	 */
	public function updateCorporationIDByCorporationName(int $corporationID, string $corporationName) {
		$exists = $this->db->queryField("SELECT corporationID FROM corporations WHERE corporationName = :corporationName", "corporationID", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationID = :corporationID WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param int $corporationID
	 * @param int $creatorCharacterID
	 */
	public function updateCorporationIDByCreatorCharacterID(int $corporationID, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT corporationID FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "corporationID", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationID = :corporationID WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param int $corporationID
	 * @param int $factionID
	 */
	public function updateCorporationIDByFactionID(int $corporationID, int $factionID) {
		$exists = $this->db->queryField("SELECT corporationID FROM corporations WHERE factionID = :factionID", "corporationID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationID = :corporationID WHERE factionID = :factionID", array(":factionID" => $factionID, ":corporationID" => $corporationID));
		}
	}

	/**
	 * @param string $corporationName
	 * @param int $allianceID
	 */
	public function updateCorporationNameByAllianceID(string $corporationName, int $allianceID) {
		$exists = $this->db->queryField("SELECT corporationName FROM corporations WHERE allianceID = :allianceID", "corporationName", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationName = :corporationName WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":corporationName" => $corporationName));
		}
	}

	/**
	 * @param string $corporationName
	 * @param int $ceoID
	 */
	public function updateCorporationNameByCeoID(string $corporationName, int $ceoID) {
		$exists = $this->db->queryField("SELECT corporationName FROM corporations WHERE ceoID = :ceoID", "corporationName", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationName = :corporationName WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":corporationName" => $corporationName));
		}
	}

	/**
	 * @param string $corporationName
	 * @param int $corporationID
	 */
	public function updateCorporationNameByCorporationID(string $corporationName, int $corporationID) {
		$exists = $this->db->queryField("SELECT corporationName FROM corporations WHERE corporationID = :corporationID", "corporationName", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationName = :corporationName WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":corporationName" => $corporationName));
		}
	}

	/**
	 * @param string $corporationName
	 * @param int $creatorCharacterID
	 */
	public function updateCorporationNameByCreatorCharacterID(string $corporationName, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT corporationName FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "corporationName", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationName = :corporationName WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":corporationName" => $corporationName));
		}
	}

	/**
	 * @param string $corporationName
	 * @param int $factionID
	 */
	public function updateCorporationNameByFactionID(string $corporationName, int $factionID) {
		$exists = $this->db->queryField("SELECT corporationName FROM corporations WHERE factionID = :factionID", "corporationName", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corporationName = :corporationName WHERE factionID = :factionID", array(":factionID" => $factionID, ":corporationName" => $corporationName));
		}
	}

	/**
	 * @param string $corpTicker
	 * @param int $allianceID
	 */
	public function updateCorpTickerByAllianceID(string $corpTicker, int $allianceID) {
		$exists = $this->db->queryField("SELECT corpTicker FROM corporations WHERE allianceID = :allianceID", "corpTicker", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corpTicker = :corpTicker WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":corpTicker" => $corpTicker));
		}
	}

	/**
	 * @param string $corpTicker
	 * @param int $ceoID
	 */
	public function updateCorpTickerByCeoID(string $corpTicker, int $ceoID) {
		$exists = $this->db->queryField("SELECT corpTicker FROM corporations WHERE ceoID = :ceoID", "corpTicker", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corpTicker = :corpTicker WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":corpTicker" => $corpTicker));
		}
	}

	/**
	 * @param string $corpTicker
	 * @param int $corporationID
	 */
	public function updateCorpTickerByCorporationID(string $corpTicker, int $corporationID) {
		$exists = $this->db->queryField("SELECT corpTicker FROM corporations WHERE corporationID = :corporationID", "corpTicker", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corpTicker = :corpTicker WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":corpTicker" => $corpTicker));
		}
	}

	/**
	 * @param string $corpTicker
	 * @param string $corporationName
	 */
	public function updateCorpTickerByCorporationName(string $corpTicker, string $corporationName) {
		$exists = $this->db->queryField("SELECT corpTicker FROM corporations WHERE corporationName = :corporationName", "corpTicker", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corpTicker = :corpTicker WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":corpTicker" => $corpTicker));
		}
	}

	/**
	 * @param string $corpTicker
	 * @param int $creatorCharacterID
	 */
	public function updateCorpTickerByCreatorCharacterID(string $corpTicker, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT corpTicker FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "corpTicker", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corpTicker = :corpTicker WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":corpTicker" => $corpTicker));
		}
	}

	/**
	 * @param string $corpTicker
	 * @param int $factionID
	 */
	public function updateCorpTickerByFactionID(string $corpTicker, int $factionID) {
		$exists = $this->db->queryField("SELECT corpTicker FROM corporations WHERE factionID = :factionID", "corpTicker", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET corpTicker = :corpTicker WHERE factionID = :factionID", array(":factionID" => $factionID, ":corpTicker" => $corpTicker));
		}
	}

	/**
	 * @param string $creationDate
	 * @param int $allianceID
	 */
	public function updateCreationDateByAllianceID(string $creationDate, int $allianceID) {
		$exists = $this->db->queryField("SELECT creationDate FROM corporations WHERE allianceID = :allianceID", "creationDate", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creationDate = :creationDate WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":creationDate" => $creationDate));
		}
	}

	/**
	 * @param string $creationDate
	 * @param int $ceoID
	 */
	public function updateCreationDateByCeoID(string $creationDate, int $ceoID) {
		$exists = $this->db->queryField("SELECT creationDate FROM corporations WHERE ceoID = :ceoID", "creationDate", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creationDate = :creationDate WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":creationDate" => $creationDate));
		}
	}

	/**
	 * @param string $creationDate
	 * @param int $corporationID
	 */
	public function updateCreationDateByCorporationID(string $creationDate, int $corporationID) {
		$exists = $this->db->queryField("SELECT creationDate FROM corporations WHERE corporationID = :corporationID", "creationDate", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creationDate = :creationDate WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":creationDate" => $creationDate));
		}
	}

	/**
	 * @param string $creationDate
	 * @param string $corporationName
	 */
	public function updateCreationDateByCorporationName(string $creationDate, string $corporationName) {
		$exists = $this->db->queryField("SELECT creationDate FROM corporations WHERE corporationName = :corporationName", "creationDate", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creationDate = :creationDate WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":creationDate" => $creationDate));
		}
	}

	/**
	 * @param string $creationDate
	 * @param int $creatorCharacterID
	 */
	public function updateCreationDateByCreatorCharacterID(string $creationDate, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT creationDate FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "creationDate", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creationDate = :creationDate WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":creationDate" => $creationDate));
		}
	}

	/**
	 * @param string $creationDate
	 * @param int $factionID
	 */
	public function updateCreationDateByFactionID(string $creationDate, int $factionID) {
		$exists = $this->db->queryField("SELECT creationDate FROM corporations WHERE factionID = :factionID", "creationDate", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creationDate = :creationDate WHERE factionID = :factionID", array(":factionID" => $factionID, ":creationDate" => $creationDate));
		}
	}

	/**
	 * @param int $creatorCharacterID
	 * @param int $allianceID
	 */
	public function updateCreatorCharacterIDByAllianceID(int $creatorCharacterID, int $allianceID) {
		$exists = $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE allianceID = :allianceID", "creatorCharacterID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creatorCharacterID = :creatorCharacterID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":creatorCharacterID" => $creatorCharacterID));
		}
	}

	/**
	 * @param int $creatorCharacterID
	 * @param int $ceoID
	 */
	public function updateCreatorCharacterIDByCeoID(int $creatorCharacterID, int $ceoID) {
		$exists = $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE ceoID = :ceoID", "creatorCharacterID", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creatorCharacterID = :creatorCharacterID WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":creatorCharacterID" => $creatorCharacterID));
		}
	}

	/**
	 * @param int $creatorCharacterID
	 * @param int $corporationID
	 */
	public function updateCreatorCharacterIDByCorporationID(int $creatorCharacterID, int $corporationID) {
		$exists = $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE corporationID = :corporationID", "creatorCharacterID", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creatorCharacterID = :creatorCharacterID WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":creatorCharacterID" => $creatorCharacterID));
		}
	}

	/**
	 * @param int $creatorCharacterID
	 * @param string $corporationName
	 */
	public function updateCreatorCharacterIDByCorporationName(int $creatorCharacterID, string $corporationName) {
		$exists = $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE corporationName = :corporationName", "creatorCharacterID", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creatorCharacterID = :creatorCharacterID WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":creatorCharacterID" => $creatorCharacterID));
		}
	}

	/**
	 * @param int $creatorCharacterID
	 * @param int $factionID
	 */
	public function updateCreatorCharacterIDByFactionID(int $creatorCharacterID, int $factionID) {
		$exists = $this->db->queryField("SELECT creatorCharacterID FROM corporations WHERE factionID = :factionID", "creatorCharacterID", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET creatorCharacterID = :creatorCharacterID WHERE factionID = :factionID", array(":factionID" => $factionID, ":creatorCharacterID" => $creatorCharacterID));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $allianceID
	 */
	public function updateDateAddedByAllianceID(string $dateAdded, int $allianceID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM corporations WHERE allianceID = :allianceID", "dateAdded", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET dateAdded = :dateAdded WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $ceoID
	 */
	public function updateDateAddedByCeoID(string $dateAdded, int $ceoID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM corporations WHERE ceoID = :ceoID", "dateAdded", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET dateAdded = :dateAdded WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $corporationID
	 */
	public function updateDateAddedByCorporationID(string $dateAdded, int $corporationID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM corporations WHERE corporationID = :corporationID", "dateAdded", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET dateAdded = :dateAdded WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param string $corporationName
	 */
	public function updateDateAddedByCorporationName(string $dateAdded, string $corporationName) {
		$exists = $this->db->queryField("SELECT dateAdded FROM corporations WHERE corporationName = :corporationName", "dateAdded", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET dateAdded = :dateAdded WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $creatorCharacterID
	 */
	public function updateDateAddedByCreatorCharacterID(string $dateAdded, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "dateAdded", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET dateAdded = :dateAdded WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $dateAdded
	 * @param int $factionID
	 */
	public function updateDateAddedByFactionID(string $dateAdded, int $factionID) {
		$exists = $this->db->queryField("SELECT dateAdded FROM corporations WHERE factionID = :factionID", "dateAdded", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET dateAdded = :dateAdded WHERE factionID = :factionID", array(":factionID" => $factionID, ":dateAdded" => $dateAdded));
		}
	}

	/**
	 * @param string $description
	 * @param int $allianceID
	 */
	public function updateDescriptionByAllianceID(string $description, int $allianceID) {
		$exists = $this->db->queryField("SELECT description FROM corporations WHERE allianceID = :allianceID", "description", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET description = :description WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":description" => $description));
		}
	}

	/**
	 * @param string $description
	 * @param int $ceoID
	 */
	public function updateDescriptionByCeoID(string $description, int $ceoID) {
		$exists = $this->db->queryField("SELECT description FROM corporations WHERE ceoID = :ceoID", "description", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET description = :description WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":description" => $description));
		}
	}

	/**
	 * @param string $description
	 * @param int $corporationID
	 */
	public function updateDescriptionByCorporationID(string $description, int $corporationID) {
		$exists = $this->db->queryField("SELECT description FROM corporations WHERE corporationID = :corporationID", "description", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET description = :description WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":description" => $description));
		}
	}

	/**
	 * @param string $description
	 * @param string $corporationName
	 */
	public function updateDescriptionByCorporationName(string $description, string $corporationName) {
		$exists = $this->db->queryField("SELECT description FROM corporations WHERE corporationName = :corporationName", "description", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET description = :description WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":description" => $description));
		}
	}

	/**
	 * @param string $description
	 * @param int $creatorCharacterID
	 */
	public function updateDescriptionByCreatorCharacterID(string $description, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT description FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "description", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET description = :description WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":description" => $description));
		}
	}

	/**
	 * @param string $description
	 * @param int $factionID
	 */
	public function updateDescriptionByFactionID(string $description, int $factionID) {
		$exists = $this->db->queryField("SELECT description FROM corporations WHERE factionID = :factionID", "description", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET description = :description WHERE factionID = :factionID", array(":factionID" => $factionID, ":description" => $description));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $allianceID
	 */
	public function updateFactionIDByAllianceID(int $factionID, int $allianceID) {
		$exists = $this->db->queryField("SELECT factionID FROM corporations WHERE allianceID = :allianceID", "factionID", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET factionID = :factionID WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $ceoID
	 */
	public function updateFactionIDByCeoID(int $factionID, int $ceoID) {
		$exists = $this->db->queryField("SELECT factionID FROM corporations WHERE ceoID = :ceoID", "factionID", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET factionID = :factionID WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $corporationID
	 */
	public function updateFactionIDByCorporationID(int $factionID, int $corporationID) {
		$exists = $this->db->queryField("SELECT factionID FROM corporations WHERE corporationID = :corporationID", "factionID", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET factionID = :factionID WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param string $corporationName
	 */
	public function updateFactionIDByCorporationName(int $factionID, string $corporationName) {
		$exists = $this->db->queryField("SELECT factionID FROM corporations WHERE corporationName = :corporationName", "factionID", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET factionID = :factionID WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":factionID" => $factionID));
		}
	}

	/**
	 * @param int $factionID
	 * @param int $creatorCharacterID
	 */
	public function updateFactionIDByCreatorCharacterID(int $factionID, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT factionID FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "factionID", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET factionID = :factionID WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":factionID" => $factionID));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $allianceID
	 */
	public function updateLastUpdatedByAllianceID(string $lastUpdated, int $allianceID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM corporations WHERE allianceID = :allianceID", "lastUpdated", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET lastUpdated = :lastUpdated WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $ceoID
	 */
	public function updateLastUpdatedByCeoID(string $lastUpdated, int $ceoID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM corporations WHERE ceoID = :ceoID", "lastUpdated", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET lastUpdated = :lastUpdated WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $corporationID
	 */
	public function updateLastUpdatedByCorporationID(string $lastUpdated, int $corporationID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM corporations WHERE corporationID = :corporationID", "lastUpdated", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET lastUpdated = :lastUpdated WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param string $corporationName
	 */
	public function updateLastUpdatedByCorporationName(string $lastUpdated, string $corporationName) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM corporations WHERE corporationName = :corporationName", "lastUpdated", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET lastUpdated = :lastUpdated WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $creatorCharacterID
	 */
	public function updateLastUpdatedByCreatorCharacterID(string $lastUpdated, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "lastUpdated", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET lastUpdated = :lastUpdated WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param string $lastUpdated
	 * @param int $factionID
	 */
	public function updateLastUpdatedByFactionID(string $lastUpdated, int $factionID) {
		$exists = $this->db->queryField("SELECT lastUpdated FROM corporations WHERE factionID = :factionID", "lastUpdated", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET lastUpdated = :lastUpdated WHERE factionID = :factionID", array(":factionID" => $factionID, ":lastUpdated" => $lastUpdated));
		}
	}

	/**
	 * @param int $memberCount
	 * @param int $allianceID
	 */
	public function updateMemberCountByAllianceID(int $memberCount, int $allianceID) {
		$exists = $this->db->queryField("SELECT memberCount FROM corporations WHERE allianceID = :allianceID", "memberCount", array(":allianceID" => $allianceID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET memberCount = :memberCount WHERE allianceID = :allianceID", array(":allianceID" => $allianceID, ":memberCount" => $memberCount));
		}
	}

	/**
	 * @param int $memberCount
	 * @param int $ceoID
	 */
	public function updateMemberCountByCeoID(int $memberCount, int $ceoID) {
		$exists = $this->db->queryField("SELECT memberCount FROM corporations WHERE ceoID = :ceoID", "memberCount", array(":ceoID" => $ceoID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET memberCount = :memberCount WHERE ceoID = :ceoID", array(":ceoID" => $ceoID, ":memberCount" => $memberCount));
		}
	}

	/**
	 * @param int $memberCount
	 * @param int $corporationID
	 */
	public function updateMemberCountByCorporationID(int $memberCount, int $corporationID) {
		$exists = $this->db->queryField("SELECT memberCount FROM corporations WHERE corporationID = :corporationID", "memberCount", array(":corporationID" => $corporationID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET memberCount = :memberCount WHERE corporationID = :corporationID", array(":corporationID" => $corporationID, ":memberCount" => $memberCount));
		}
	}

	/**
	 * @param int $memberCount
	 * @param string $corporationName
	 */
	public function updateMemberCountByCorporationName(int $memberCount, string $corporationName) {
		$exists = $this->db->queryField("SELECT memberCount FROM corporations WHERE corporationName = :corporationName", "memberCount", array(":corporationName" => $corporationName));
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET memberCount = :memberCount WHERE corporationName = :corporationName", array(":corporationName" => $corporationName, ":memberCount" => $memberCount));
		}
	}

	/**
	 * @param int $memberCount
	 * @param int $creatorCharacterID
	 */
	public function updateMemberCountByCreatorCharacterID(int $memberCount, int $creatorCharacterID) {
		$exists = $this->db->queryField("SELECT memberCount FROM corporations WHERE creatorCharacterID = :creatorCharacterID", "memberCount", array(":creatorCharacterID" => $creatorCharacterID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET memberCount = :memberCount WHERE creatorCharacterID = :creatorCharacterID", array(":creatorCharacterID" => $creatorCharacterID, ":memberCount" => $memberCount));
		}
	}

	/**
	 * @param int $memberCount
	 * @param int $factionID
	 */
	public function updateMemberCountByFactionID(int $memberCount, int $factionID) {
		$exists = $this->db->queryField("SELECT memberCount FROM corporations WHERE factionID = :factionID", "memberCount", array(":factionID" => $factionID)); 
		if(!empty($exists)) {
			$this->db->execute("UPDATE corporations SET memberCount = :memberCount WHERE factionID = :factionID", array(":factionID" => $factionID, ":memberCount" => $memberCount));
		}
	}
}