<?php
namespace App\Model;

use Slim\Container;

class dgmAttributeTypes {

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
		return $this->db->query("SELECT * FROM dgmAttributeTypes WHERE attributeID = :attributeID", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getAllByAttributeName(string $attributeName) {
		return $this->db->query("SELECT * FROM dgmAttributeTypes WHERE attributeName = :attributeName", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getAllByCategoryID(int $categoryID) {
		return $this->db->query("SELECT * FROM dgmAttributeTypes WHERE categoryID = :categoryID", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getAllByDisplayName(string $displayName) {
		return $this->db->query("SELECT * FROM dgmAttributeTypes WHERE displayName = :displayName", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getAllByIconID(int $iconID) {
		return $this->db->query("SELECT * FROM dgmAttributeTypes WHERE iconID = :iconID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getAllByUnitID(int $unitID) {
		return $this->db->query("SELECT * FROM dgmAttributeTypes WHERE unitID = :unitID", array(":unitID" => $unitID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getAttributeIDByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT attributeID FROM dgmAttributeTypes WHERE attributeName = :attributeName", "attributeID", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getAttributeIDByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT attributeID FROM dgmAttributeTypes WHERE categoryID = :categoryID", "attributeID", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT attributeID FROM dgmAttributeTypes WHERE displayName = :displayName", "attributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT attributeID FROM dgmAttributeTypes WHERE iconID = :iconID", "attributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getAttributeIDByUnitID(int $unitID) {
		return $this->db->queryField("SELECT attributeID FROM dgmAttributeTypes WHERE unitID = :unitID", "attributeID", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getAttributeNameByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT attributeName FROM dgmAttributeTypes WHERE attributeID = :attributeID", "attributeName", array(":attributeID" => $attributeID));
	}

	/**
	 * @param int $categoryID
	 */
	public function getAttributeNameByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT attributeName FROM dgmAttributeTypes WHERE categoryID = :categoryID", "attributeName", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getAttributeNameByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT attributeName FROM dgmAttributeTypes WHERE displayName = :displayName", "attributeName", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getAttributeNameByIconID(int $iconID) {
		return $this->db->queryField("SELECT attributeName FROM dgmAttributeTypes WHERE iconID = :iconID", "attributeName", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getAttributeNameByUnitID(int $unitID) {
		return $this->db->queryField("SELECT attributeName FROM dgmAttributeTypes WHERE unitID = :unitID", "attributeName", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getCategoryIDByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT categoryID FROM dgmAttributeTypes WHERE attributeID = :attributeID", "categoryID", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getCategoryIDByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT categoryID FROM dgmAttributeTypes WHERE attributeName = :attributeName", "categoryID", array(":attributeName" => $attributeName));
	}

	/**
	 * @param string $displayName
	 */
	public function getCategoryIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT categoryID FROM dgmAttributeTypes WHERE displayName = :displayName", "categoryID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getCategoryIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT categoryID FROM dgmAttributeTypes WHERE iconID = :iconID", "categoryID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getCategoryIDByUnitID(int $unitID) {
		return $this->db->queryField("SELECT categoryID FROM dgmAttributeTypes WHERE unitID = :unitID", "categoryID", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getDefaultValueByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT defaultValue FROM dgmAttributeTypes WHERE attributeID = :attributeID", "defaultValue", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getDefaultValueByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT defaultValue FROM dgmAttributeTypes WHERE attributeName = :attributeName", "defaultValue", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getDefaultValueByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT defaultValue FROM dgmAttributeTypes WHERE categoryID = :categoryID", "defaultValue", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getDefaultValueByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT defaultValue FROM dgmAttributeTypes WHERE displayName = :displayName", "defaultValue", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getDefaultValueByIconID(int $iconID) {
		return $this->db->queryField("SELECT defaultValue FROM dgmAttributeTypes WHERE iconID = :iconID", "defaultValue", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getDefaultValueByUnitID(int $unitID) {
		return $this->db->queryField("SELECT defaultValue FROM dgmAttributeTypes WHERE unitID = :unitID", "defaultValue", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getDescriptionByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT description FROM dgmAttributeTypes WHERE attributeID = :attributeID", "description", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getDescriptionByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT description FROM dgmAttributeTypes WHERE attributeName = :attributeName", "description", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getDescriptionByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT description FROM dgmAttributeTypes WHERE categoryID = :categoryID", "description", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getDescriptionByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT description FROM dgmAttributeTypes WHERE displayName = :displayName", "description", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getDescriptionByIconID(int $iconID) {
		return $this->db->queryField("SELECT description FROM dgmAttributeTypes WHERE iconID = :iconID", "description", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getDescriptionByUnitID(int $unitID) {
		return $this->db->queryField("SELECT description FROM dgmAttributeTypes WHERE unitID = :unitID", "description", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getDisplayNameByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmAttributeTypes WHERE attributeID = :attributeID", "displayName", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getDisplayNameByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT displayName FROM dgmAttributeTypes WHERE attributeName = :attributeName", "displayName", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getDisplayNameByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT displayName FROM dgmAttributeTypes WHERE categoryID = :categoryID", "displayName", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $iconID
	 */
	public function getDisplayNameByIconID(int $iconID) {
		return $this->db->queryField("SELECT displayName FROM dgmAttributeTypes WHERE iconID = :iconID", "displayName", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getDisplayNameByUnitID(int $unitID) {
		return $this->db->queryField("SELECT displayName FROM dgmAttributeTypes WHERE unitID = :unitID", "displayName", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getHighIsGoodByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT highIsGood FROM dgmAttributeTypes WHERE attributeID = :attributeID", "highIsGood", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getHighIsGoodByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT highIsGood FROM dgmAttributeTypes WHERE attributeName = :attributeName", "highIsGood", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getHighIsGoodByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT highIsGood FROM dgmAttributeTypes WHERE categoryID = :categoryID", "highIsGood", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getHighIsGoodByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT highIsGood FROM dgmAttributeTypes WHERE displayName = :displayName", "highIsGood", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getHighIsGoodByIconID(int $iconID) {
		return $this->db->queryField("SELECT highIsGood FROM dgmAttributeTypes WHERE iconID = :iconID", "highIsGood", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getHighIsGoodByUnitID(int $unitID) {
		return $this->db->queryField("SELECT highIsGood FROM dgmAttributeTypes WHERE unitID = :unitID", "highIsGood", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getIconIDByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmAttributeTypes WHERE attributeID = :attributeID", "iconID", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getIconIDByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT iconID FROM dgmAttributeTypes WHERE attributeName = :attributeName", "iconID", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getIconIDByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT iconID FROM dgmAttributeTypes WHERE categoryID = :categoryID", "iconID", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getIconIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT iconID FROM dgmAttributeTypes WHERE displayName = :displayName", "iconID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $unitID
	 */
	public function getIconIDByUnitID(int $unitID) {
		return $this->db->queryField("SELECT iconID FROM dgmAttributeTypes WHERE unitID = :unitID", "iconID", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getPublishedByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT published FROM dgmAttributeTypes WHERE attributeID = :attributeID", "published", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getPublishedByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT published FROM dgmAttributeTypes WHERE attributeName = :attributeName", "published", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getPublishedByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT published FROM dgmAttributeTypes WHERE categoryID = :categoryID", "published", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getPublishedByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT published FROM dgmAttributeTypes WHERE displayName = :displayName", "published", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getPublishedByIconID(int $iconID) {
		return $this->db->queryField("SELECT published FROM dgmAttributeTypes WHERE iconID = :iconID", "published", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getPublishedByUnitID(int $unitID) {
		return $this->db->queryField("SELECT published FROM dgmAttributeTypes WHERE unitID = :unitID", "published", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getStackableByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT stackable FROM dgmAttributeTypes WHERE attributeID = :attributeID", "stackable", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getStackableByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT stackable FROM dgmAttributeTypes WHERE attributeName = :attributeName", "stackable", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getStackableByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT stackable FROM dgmAttributeTypes WHERE categoryID = :categoryID", "stackable", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getStackableByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT stackable FROM dgmAttributeTypes WHERE displayName = :displayName", "stackable", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getStackableByIconID(int $iconID) {
		return $this->db->queryField("SELECT stackable FROM dgmAttributeTypes WHERE iconID = :iconID", "stackable", array(":iconID" => $iconID));
	}

	/**
	 * @param int $unitID
	 */
	public function getStackableByUnitID(int $unitID) {
		return $this->db->queryField("SELECT stackable FROM dgmAttributeTypes WHERE unitID = :unitID", "stackable", array(":unitID" => $unitID));
	}

	/**
	 * @param int $attributeID
	 */
	public function getUnitIDByAttributeID(int $attributeID) {
		return $this->db->queryField("SELECT unitID FROM dgmAttributeTypes WHERE attributeID = :attributeID", "unitID", array(":attributeID" => $attributeID));
	}

	/**
	 * @param string $attributeName
	 */
	public function getUnitIDByAttributeName(string $attributeName) {
		return $this->db->queryField("SELECT unitID FROM dgmAttributeTypes WHERE attributeName = :attributeName", "unitID", array(":attributeName" => $attributeName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getUnitIDByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT unitID FROM dgmAttributeTypes WHERE categoryID = :categoryID", "unitID", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $displayName
	 */
	public function getUnitIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT unitID FROM dgmAttributeTypes WHERE displayName = :displayName", "unitID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $iconID
	 */
	public function getUnitIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT unitID FROM dgmAttributeTypes WHERE iconID = :iconID", "unitID", array(":iconID" => $iconID));
	}
}