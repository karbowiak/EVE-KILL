<?php
namespace App\Lib;


use Symfony\Component\Cache\Adapter\AdapterInterface;

class DatabaseAsync {
	public $timeout = 10;
	protected $credentials = array();
	protected $connections = array();
	protected $cache;

	public function __construct(AdapterInterface $cache, array $settings) {
		$this->cache = $cache;
		$this->settings = $settings;
	}

	public function __destruct() {

	}

	/**
	 * @param string $name
	 *
	 * @return \mysqli_driver
	 */
	private function initDatabase(string $name): \mysqli {
		$connection = mysqli_connect($this->settings["host"], $this->settings["user"], $this->settings["pass"], $this->settings["dbName"], $this->settings["port"]);
		$this->connections[$name] = $connection;

		return $connection;
	}

	public function executeQuery(string $name, string $query, array $parameters = array()): bool {
		$db = $this->initDatabase($name);

		foreach($parameters as $key => $value) {
			$query = str_replace($key, mysqli_real_escape_string($db, $value), $query);
		}

		return $db->query($query, MYSQLI_ASYNC);
	}

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