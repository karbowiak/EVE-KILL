<?php
namespace App\Lib;


use Monolog\Logger;
use phpDocumentor\Reflection\Types\String_;
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

	}

	/**
	 * @param string $query
	 * @param array  $parameters
	 * @param int    $cacheTime
	 *
	 * @return array|null
	 */
	public function queryRow(string $query, array $parameters = array(), int $cacheTime = 30): ?array {

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

	}

	/**
	 * @param string $query
	 * @param array  $parameters
	 * @param bool   $returnID
	 */
	public function execute(string $query, array $parameters = array(), boolean $returnID = false): void {

	}
}