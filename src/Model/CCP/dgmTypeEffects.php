<?php
namespace App\Model\CCP;

use Slim\Container;

class dgmTypeEffects {

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
	 * @param int $effectID
	 */
	public function getAllByEffectID(int $effectID) {
		return $this->db->query("SELECT * FROM dgmTypeEffects WHERE effectID = :effectID", array(":effectID" => $effectID));
	}

	/**
	 * @param int $typeID
	 */
	public function getAllByTypeID(int $typeID) {
		return $this->db->query("SELECT * FROM dgmTypeEffects WHERE typeID = :typeID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $typeID
	 */
	public function getEffectIDByTypeID(int $typeID) {
		return $this->db->queryField("SELECT effectID FROM dgmTypeEffects WHERE typeID = :typeID", "effectID", array(":typeID" => $typeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getIsDefaultByEffectID(int $effectID) {
		return $this->db->queryField("SELECT isDefault FROM dgmTypeEffects WHERE effectID = :effectID", "isDefault", array(":effectID" => $effectID));
	}

	/**
	 * @param int $typeID
	 */
	public function getIsDefaultByTypeID(int $typeID) {
		return $this->db->queryField("SELECT isDefault FROM dgmTypeEffects WHERE typeID = :typeID", "isDefault", array(":typeID" => $typeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getTypeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT typeID FROM dgmTypeEffects WHERE effectID = :effectID", "typeID", array(":effectID" => $effectID));
	}
}