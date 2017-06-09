<?php
namespace App\Lib;


use Monolog\Logger;
use Symfony\Component\Cache\Adapter\AdapterInterface;

/**
 * Class DatabaseAsync
 * @package App\Lib
 */
class DatabaseAsync {
	/**
	 * @var int
	 */
	public $timeout = 10;
	/**
	 * @var array
	 */
	protected $credentials = array();
	/**
	 * @var array
	 */
	protected $connections = array();
	/**
	 * @var AdapterInterface
	 */
	protected $cache;
	/**
	 * @var Logger
	 */
	protected $log;

	/**
	 * DatabaseAsync constructor.
	 *
	 * @param AdapterInterface $cache
	 * @param array            $settings
	 * @param Logger           $log
	 */
	public function __construct(AdapterInterface $cache, array $settings, Logger $log) {
		$this->cache = $cache;
		$this->settings = $settings;
		$this->log = $log;
	}

	/**
	 *
	 */
	public function __destruct() {
		foreach($this->connections as $connection) {
			$connection->close();
		}
	}

	/**
	 * @param string $name
	 *
	 * @return \mysqli|\mysqli_driver
	 */
	private function initDatabase(string $name): \mysqli {
		$connection = mysqli_connect($this->settings["host"], $this->settings["user"], $this->settings["pass"], $this->settings["dbName"], $this->settings["port"]);
		$this->connections[$name] = $connection;

		return $connection;
	}

	/**
	 * @param string $name
	 * @param string $query
	 * @param array  $parameters
	 *
	 * @return bool
	 */
	public function executeQuery(string $name, string $query, array $parameters = array()): bool {
		$db = $this->initDatabase($name);

		foreach($parameters as $key => $value) {
			$query = str_replace($key, mysqli_real_escape_string($db, $value), $query);
		}

		return $db->query($query, MYSQLI_ASYNC);
	}

	/**
	 * @param string $name
	 *
	 * @return array|null
	 */
	public function getQuery(string $name): ?array {
		if(!isset($this->connections[$name]))
			return null;

		$connection = $this->connections[$name];
		do {
			$links = $errors = $reject = $this->connections;
			mysqli_poll($links, $errors, $reject, $this->timeout);
		} while(!in_array($connection, $links, true) && !in_array($connection, $errors, true) && !in_array($connection, $reject, true));

		$data = array();
		$con = $connection->reap_async_query();
		while($row = $con->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
	}
}