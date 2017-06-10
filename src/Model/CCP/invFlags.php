<?php
namespace App\Model;

use Slim\Container;

class invFlags {

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
	 * @param int $flagID
	 */
	public function getAllByFlagID(int $flagID) {
		return $this->db->query("SELECT * FROM invFlags WHERE flagID = :flagID", array(":flagID" => $flagID));
	}

	/**
	 * @param string $flagName
	 */
	public function getAllByFlagName(string $flagName) {
		return $this->db->query("SELECT * FROM invFlags WHERE flagName = :flagName", array(":flagName" => $flagName));
	}

	/**
	 * @param int $orderID
	 */
	public function getAllByOrderID(int $orderID) {
		return $this->db->query("SELECT * FROM invFlags WHERE orderID = :orderID", array(":orderID" => $orderID));
	}

	/**
	 * @param string $flagName
	 */
	public function getFlagIDByFlagName(string $flagName) {
		return $this->db->queryField("SELECT flagID FROM invFlags WHERE flagName = :flagName", "flagID", array(":flagName" => $flagName));
	}

	/**
	 * @param int $orderID
	 */
	public function getFlagIDByOrderID(int $orderID) {
		return $this->db->queryField("SELECT flagID FROM invFlags WHERE orderID = :orderID", "flagID", array(":orderID" => $orderID));
	}

	/**
	 * @param int $flagID
	 */
	public function getFlagNameByFlagID(int $flagID) {
		return $this->db->queryField("SELECT flagName FROM invFlags WHERE flagID = :flagID", "flagName", array(":flagID" => $flagID));
	}

	/**
	 * @param int $orderID
	 */
	public function getFlagNameByOrderID(int $orderID) {
		return $this->db->queryField("SELECT flagName FROM invFlags WHERE orderID = :orderID", "flagName", array(":orderID" => $orderID));
	}

	/**
	 * @param int $flagID
	 */
	public function getFlagTextByFlagID(int $flagID) {
		return $this->db->queryField("SELECT flagText FROM invFlags WHERE flagID = :flagID", "flagText", array(":flagID" => $flagID));
	}

	/**
	 * @param string $flagName
	 */
	public function getFlagTextByFlagName(string $flagName) {
		return $this->db->queryField("SELECT flagText FROM invFlags WHERE flagName = :flagName", "flagText", array(":flagName" => $flagName));
	}

	/**
	 * @param int $orderID
	 */
	public function getFlagTextByOrderID(int $orderID) {
		return $this->db->queryField("SELECT flagText FROM invFlags WHERE orderID = :orderID", "flagText", array(":orderID" => $orderID));
	}

	/**
	 * @param int $flagID
	 */
	public function getOrderIDByFlagID(int $flagID) {
		return $this->db->queryField("SELECT orderID FROM invFlags WHERE flagID = :flagID", "orderID", array(":flagID" => $flagID));
	}

	/**
	 * @param string $flagName
	 */
	public function getOrderIDByFlagName(string $flagName) {
		return $this->db->queryField("SELECT orderID FROM invFlags WHERE flagName = :flagName", "orderID", array(":flagName" => $flagName));
	}
}