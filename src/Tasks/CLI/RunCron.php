<?php
namespace App\Tasks\CLI;


use Slim\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunCron extends Command {
	protected $container;

	public function __construct(Container $container) {
		parent::__construct();
		$this->container = $container;
	}

	protected $running = array();
	protected $jobs = array();

	protected function configure() {
		$this
			->setName("run:cron")
			->setDescription("Run cronjobs");
	}

	protected function execute(InputInterface $input, OutputInterface $output) {
		$cache = $this->container->get("cache");
		$log = $this->container->get("logger");

		$cronjobs = glob(__DIR__ . "/../Cron/*.php");
		foreach($cronjobs as $cronjob) {
			require_once($cronjob);
		}


	}
}