<?php
namespace App\Model;

use Slim\Container;

class dgmAttributeCategories {

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
		return $this->db->query("SELECT * FROM dgmAttributeCategories WHERE categoryID = :categoryID", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $categoryName
	 */
	public function getAllByCategoryName(string $categoryName) {
		return $this->db->query("SELECT * FROM dgmAttributeCategories WHERE categoryName = :categoryName", array(":categoryName" => $categoryName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getCategoryDescriptionByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT categoryDescription FROM dgmAttributeCategories WHERE categoryID = :categoryID", "categoryDescription", array(":categoryID" => $categoryID));
	}

	/**
	 * @param string $categoryName
	 */
	public function getCategoryDescriptionByCategoryName(string $categoryName) {
		return $this->db->queryField("SELECT categoryDescription FROM dgmAttributeCategories WHERE categoryName = :categoryName", "categoryDescription", array(":categoryName" => $categoryName));
	}

	/**
	 * @param string $categoryName
	 */
	public function getCategoryIDByCategoryName(string $categoryName) {
		return $this->db->queryField("SELECT categoryID FROM dgmAttributeCategories WHERE categoryName = :categoryName", "categoryID", array(":categoryName" => $categoryName));
	}

	/**
	 * @param int $categoryID
	 */
	public function getCategoryNameByCategoryID(int $categoryID) {
		return $this->db->queryField("SELECT categoryName FROM dgmAttributeCategories WHERE categoryID = :categoryID", "categoryName", array(":categoryID" => $categoryID));
	}
}