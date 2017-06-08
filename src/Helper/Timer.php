<?php
namespace App\Helper;


/**
 * Class Timer
 * @package App\Helper
 */
class Timer {
	/**
	 * @var
	 */
	protected $startTime;

	/**
	 * Timer constructor.
	 */
	public function __construct() {
		$this->start();
	}

	/**
	 *
	 */
	public function start(): void {
		$this->startTime = microtime(true);
	}

	/**
	 * @return int
	 */
	public function stop(): int {
		return 1000 * (microtime(true) - $this->startTime);
	}
}