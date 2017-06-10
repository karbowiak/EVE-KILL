<?php
namespace App\Model;

use Slim\Container;

class dgmTypeAttributes {

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
	 * @param int $attributeID
	 */
	public function getAllByAttributeID(int $attributeID) {
		return $this->db->query("SELECT * FROM dgmTypeAttributes WHERE attributeID = :attributeID", array(":attributeID" => $attributeID));
	}

	/**
	 * @param int $typeID
	 */
	public function getAllByTypeID(int $typeID) {
		return $this->db->query("SELECT * FROM dgmTypeAttributes WHERE typeID = :typeID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $typeID
	 */
	public function getAttributeIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT attributeID FROM dgmTypeAttributes WHERE typeID = :typeID", "attributeID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getTypeIDByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT typeID FROM dgmTypeAttributes WHERE attributeID = :attributeID", "typeID", array(":attributeID" => $attributeID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getValueFloatByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT valueFloat FROM dgmTypeAttributes WHERE attributeID = :attributeID", "valueFloat", array(":attributeID" => $attributeID));
	}

	/**
	 * @param int $typeID
	 */
	public function getValueFloatByTypeID(int $typeID) {
		return $this->db->queryField("SELECT valueFloat FROM dgmTypeAttributes WHERE typeID = :typeID", "valueFloat", array(":typeID" => $typeID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getValueIntByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT valueInt FROM dgmTypeAttributes WHERE attributeID = :attributeID", "valueInt", array(":attributeID" => $attributeID));
	}

	/**
	 * @param int $typeID
	 */
	public function getValueIntByTypeID(int $typeID) {
		return $this->db->queryField("SELECT valueInt FROM dgmTypeAttributes WHERE typeID = :typeID", "valueInt", array(":typeID" => $typeID));
	}
}