<?php
namespace App\Model;


use App\Lib\Database;

/**
 * Class Storage
 * @package App\Model
 */
class Storage {
	/**
	 * @var Database
	 */
	protected $db;

	/**
	 * Storage constructor.
	 *
	 * @param Database $database
	 */
	public function __construct(Database $database) {
		$this->db = $database;
	}

	/**
	 * @param string $key
	 *
	 * @return string
	 */
	public function getData(string $key): ?string {
		return $this->db->queryField("SELECT value FROM storage WHERE `key` = :key", "value", array(":key" => $key), 0);
	}

	/**
	 * @param string $key
	 * @param string $value
	 *
	 * @return int
	 */
	public function insertData(string $key, string $value): ?int {
		return $this->db->execute("REPLACE INTO storage (`key`, value) VALUES (:key, :value)", array(":key" => $key, ":value" => $value));

	}

	/**
	 * @param string $key
	 *
	 * @return int
	 */
	public function deleteData(string $key): ?int {
		return $this->db->execute("DELETE FROM storage WHERE `key` = :key", array(":key" => $key));
	}
}