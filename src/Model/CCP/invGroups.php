<?php
namespace App\Model\CCP;

use Slim\Container;

class invGroups {

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
	 * @param int $categoryID
	 */
	public function getAllByCategoryID(int $categoryID) {
		return $this->db->query("SELECT * FROM invGroups WHERE categoryID = :categoryID", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $groupID
	 */
	public function getAllByGroupID(int $groupID) {
		return $this->db->query("SELECT * FROM invGroups WHERE groupID = :groupID", array(":groupID" => $groupID));
	}

	/**
	 * @param string $groupName
	 */
	public function getAllByGroupName(string $groupName) {
		return $this->db->query("SELECT * FROM invGroups WHERE groupName = :groupName", array(":groupName" => $groupName));
	}

	/**
	 * @param int $iconID
	 */
	public function getAllByIconID(int $iconID) {
		return $this->db->query("SELECT * FROM invGroups WHERE iconID = :iconID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $categoryID
	 */
	public function getAnchorableByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT anchorable FROM invGroups WHERE categoryID = :categoryID", "anchorable", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $groupID
	 */
	public function getAnchorableByGroupID(int $groupID) {
		return $this->db->queryField("SELECT anchorable FROM invGroups WHERE groupID = :groupID", "anchorable", array(":groupID" => $groupID));
	}

	/**
	 * @param string $groupName
	 */
	public function getAnchorableByGroupName(string $groupName) {
		return $this->db->queryField("SELECT anchorable FROM invGroups WHERE groupName = :groupName", "anchorable", array(":groupName" => $groupName));
	}

	/**
	 * @param int $iconID
	 */
	public function getAnchorableByIconID(int $iconID) {
		return $this->db->queryField("SELECT anchorable FROM invGroups WHERE iconID = :iconID", "anchorable", array(":iconID" => $iconID));
	}

	/**
	 * @param int $categoryID
	 */
	public function getAnchoredByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT anchored FROM invGroups WHERE categoryID = :categoryID", "anchored", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $groupID
	 */
	public function getAnchoredByGroupID(int $groupID) {
		return $this->db->queryField("SELECT anchored FROM invGroups WHERE groupID = :groupID", "anchored", array(":groupID" => $groupID));
	}

	/**
	 * @param string $groupName
	 */
	public function getAnchoredByGroupName(string $groupName) {
		return $this->db->queryField("SELECT anchored FROM invGroups WHERE groupName = :groupName", "anchored", array(":groupName" => $groupName));
	}

	/**
	 * @param int $iconID
	 */
	public function getAnchoredByIconID(int $iconID) {
		return $this->db->queryField("SELECT anchored FROM invGroups WHERE iconID = :iconID", "anchored", array(":iconID" => $iconID));
	}

	/**
	 * @param int $groupID
	 */
	public function getCategoryIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT categoryID FROM invGroups WHERE groupID = :groupID", "categoryID", array(":groupID" => $groupID));
	}

	/**
	 * @param string $groupName
	 */
	public function getCategoryIDByGroupName(string $groupName) {
		return $this->db->queryField("SELECT categoryID FROM invGroups WHERE groupName = :groupName", "categoryID", array(":groupName" => $groupName));
	}

	/**
	 * @param int $iconID
	 */
	public function getCategoryIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT categoryID FROM invGroups WHERE iconID = :iconID", "categoryID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $categoryID
	 */
	public function getFittableNonSingletonByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT fittableNonSingleton FROM invGroups WHERE categoryID = :categoryID", "fittableNonSingleton", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $groupID
	 */
	public function getFittableNonSingletonByGroupID(int $groupID) {
		return $this->db->queryField("SELECT fittableNonSingleton FROM invGroups WHERE groupID = :groupID", "fittableNonSingleton", array(":groupID" => $groupID));
	}

	/**
	 * @param string $groupName
	 */
	public function getFittableNonSingletonByGroupName(string $groupName) {
		return $this->db->queryField("SELECT fittableNonSingleton FROM invGroups WHERE groupName = :groupName", "fittableNonSingleton", array(":groupName" => $groupName));
	}

	/**
	 * @param int $iconID
	 */
	public function getFittableNonSingletonByIconID(int $iconID) {
		return $this->db->queryField("SELECT fittableNonSingleton FROM invGroups WHERE iconID = :iconID", "fittableNonSingleton", array(":iconID" => $iconID));
	}

	/**
	 * @param int $categoryID
	 */
	public function getGroupIDByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT groupID FROM invGroups WHERE categoryID = :categoryID", "groupID", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $groupName
	 */
	public function getGroupIDByGroupName(string $groupName) {
		return $this->db->queryField("SELECT groupID FROM invGroups WHERE groupName = :groupName", "groupID", array(":groupName" => $groupName));
	}

	/**
	 * @param int $iconID
	 */
	public function getGroupIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT groupID FROM invGroups WHERE iconID = :iconID", "groupID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $categoryID
	 */
	public function getGroupNameByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT groupName FROM invGroups WHERE categoryID = :categoryID", "groupName", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $groupID
	 */
	public function getGroupNameByGroupID(int $groupID) {
		return $this->db->queryField("SELECT groupName FROM invGroups WHERE groupID = :groupID", "groupName", array(":groupID" => $groupID));
	}

	/**
	 * @param int $iconID
	 */
	public function getGroupNameByIconID(int $iconID) {
		return $this->db->queryField("SELECT groupName FROM invGroups WHERE iconID = :iconID", "groupName", array(":iconID" => $iconID));
	}

	/**
	 * @param int $categoryID
	 */
	public function getIconIDByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT iconID FROM invGroups WHERE categoryID = :categoryID", "iconID", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $groupID
	 */
	public function getIconIDByGroupID(int $groupID) {
		return $this->db->queryField("SELECT iconID FROM invGroups WHERE groupID = :groupID", "iconID", array(":groupID" => $groupID));
	}

	/**
	 * @param string $groupName
	 */
	public function getIconIDByGroupName(string $groupName) {
		return $this->db->queryField("SELECT iconID FROM invGroups WHERE groupName = :groupName", "iconID", array(":groupName" => $groupName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getPublishedByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT published FROM invGroups WHERE categoryID = :categoryID", "published", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $groupID
	 */
	public function getPublishedByGroupID(int $groupID) {
		return $this->db->queryField("SELECT published FROM invGroups WHERE groupID = :groupID", "published", array(":groupID" => $groupID));
	}

	/**
	 * @param string $groupName
	 */
	public function getPublishedByGroupName(string $groupName) {
		return $this->db->queryField("SELECT published FROM invGroups WHERE groupName = :groupName", "published", array(":groupName" => $groupName));
	}

	/**
	 * @param int $iconID
	 */
	public function getPublishedByIconID(int $iconID) {
		return $this->db->queryField("SELECT published FROM invGroups WHERE iconID = :iconID", "published", array(":iconID" => $iconID));
	}

	/**
	 * @param int $categoryID
	 */
	public function getUseBasePriceByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT useBasePrice FROM invGroups WHERE categoryID = :categoryID", "useBasePrice", array(":categoryID" => $categoryID));
	}

	/**
	 * @param int $groupID
	 */
	public function getUseBasePriceByGroupID(int $groupID) {
		return $this->db->queryField("SELECT useBasePrice FROM invGroups WHERE groupID = :groupID", "useBasePrice", array(":groupID" => $groupID));
	}

	/**
	 * @param string $groupName
	 */
	public function getUseBasePriceByGroupName(string $groupName) {
		return $this->db->queryField("SELECT useBasePrice FROM invGroups WHERE groupName = :groupName", "useBasePrice", array(":groupName" => $groupName));
	}

	/**
	 * @param int $iconID
	 */
	public function getUseBasePriceByIconID(int $iconID) {
		return $this->db->queryField("SELECT useBasePrice FROM invGroups WHERE iconID = :iconID", "useBasePrice", array(":iconID" => $iconID));
	}
}