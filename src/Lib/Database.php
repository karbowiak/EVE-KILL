<?php
namespace App\Lib;


use Monolog\Logger;
use Symfony\Component\Cache\Adapter\AbstractAdapter;

/**
 * Class Database
 * @package App\Lib
 */
class Database {
	/**
	 * @var AbstractAdapter
	 */
	protected $cache;
	/**
	 * @var Logger
	 */
	protected $log;
	/**
	 * @var \PDO
	 */
	protected $db;

	/**
	 * Database constructor.
	 *
	 * @param AbstractAdapter $cache
	 * @param array           $settings
	 * @param Logger          $log
	 *
	 * @throws \Exception
	 */
	public function __construct(AbstractAdapter $cache, array $settings, Logger $log) {
		$this->cache = $cache;
		$this->log = $log;

		$host = ";host=" . $settings["host"];
		$dsn = "mysql:dbname={$settings["dbName"]}{$host};charset=utf8";

		try {
			$this->db = new \PDO($dsn, $settings["user"], $settings["pass"], [
				\PDO::ATTR_PERSISTENT => true,
				\PDO::ATTR_EMULATE_PREPARES => true,
				\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
				\PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
				\PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = '+00:00',NAMES utf8;"
			]);
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage());
		}

	}

	/**
	 * @param string $query
	 * @param array  $parameters
	 * @param int    $cacheTime
	 *
	 * @return array|null
	 */
	public function query(string $query, array $parameters = array(), int $cacheTime = 30): ?array {
		// Sanity check
		if(strpos($query, ";") !== false)
			throw new \Exception("Semicolons are not allowed in regular queries. Use parameters instead");

		// Cache key
		$key = $this->getCacheKey($query, $parameters);

		// Check the cache
		if($cacheTime > 0) {
			if($this->cache->hasItem($key))
				return $this->cache->getItem($key)->get();
		}

		try {
			$stmt = $this->db->prepare($query);
			$stmt->execute($parameters);

			if($stmt->errorCode() != 0)
				return null;

			$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			$stmt->closeCursor();

			if($cacheTime > 0) {
				$cacheData = $this->cache->getItem($key);
				$cacheData->set($result);
				$cacheData->expiresAfter($cacheTime);
				$this->cache->save($cacheData);
			}

			return $result;
		} catch(\Exception $e) {
			throw new \Exception($e->getMessage());
		}
	}

	/**
	 * @param string $query
	 * @param array  $parameters
	 * @param int    $cacheTime
	 *
	 * @return array|null
	 */
	public function queryRow(string $query, array $parameters = array(), int $cacheTime = 30): ?array {
		$result = $this->query($query, $parameters, $cacheTime);

		if(count($result) >= 1) {
			return $result[0];
		}

		return array();
	}

	/**
	 * @param string $query
	 * @param string $field
	 * @param array  $parameters
	 * @param int    $cacheTime
	 *
	 * @return null|string
	 */
	public function queryField(string $query, string $field, array $parameters = array(), int $cacheTime = 30): ?string {
		$result = $this->query($query, $parameters, $cacheTime);
		if(count($result) == 0)
			return null;

		return $result[0][$field];
	}

	/**
	 * @param string $query
	 * @param array  $parameters
	 * @param bool   $returnID
	 */
	public function execute(string $query, array $parameters = array(), bool $returnID = false): ?int {
		$this->db->beginTransaction();
		$stmt = $this->db->prepare($query);
		$stmt->execute($parameters);

		if($stmt->errorCode() != 0) {
			$this->db->rollBack();
			return null;
		}

		$rID = $returnID ? $this->db->lastInsertId() : 0;
		$this->db->commit();
		$rowCount = $stmt->rowCount();
		$stmt->closeCursor();

		if($returnID)
			return $rID;
		return $rowCount;

	}

	/**
	 * Generate a cache key for the query
	 *
	 * @param string $query
	 * @param array  $parameters
	 *
	 * @return string
	 */
	private function getCacheKey(string $query, array $parameters = array()): string {
		foreach($parameters as $key => $value) {
			$query .= "|{$key}|{$value}";
		}

		return "Db:" . sha1($query);
	}
}