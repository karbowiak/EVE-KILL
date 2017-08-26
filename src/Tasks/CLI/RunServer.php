<?php
namespace App\Tasks\CLI;


use Slim\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class RunCron
 * @package App\Tasks\CLI
 */
class RunServer extends Command {
	protected $container;

	/**
	 * RunCron constructor.
	 *
	 * @param Container $container
	 */
	public function __construct(Container $container) {
		parent::__construct();
		$this->container = $container;
	}

	protected $running = array();
	protected $jobs = array();

	protected function configure() {
		$this
			->setName("run:server")
			->setDescription("Starts the server");
		$this->configurePPMOptions($this);
	}

	protected function configurePPMOptions(Command $command)
	{
		$command
			->addOption("config", null, InputOption::VALUE_OPTIONAL, "Config file location (Not needed)", null)
			->addOption("bridge", null, InputOption::VALUE_OPTIONAL, "The bridge we use to convert a ReactPHP-Request to your target framework.", "Thessia\\Middleware\\Bridge")
			->addOption("bootstrap", null, InputOption::VALUE_OPTIONAL, "The class that will be used to bootstrap your application", "Thessia\\Middleware\\Bootstrap")
			->addOption("host", null, InputOption::VALUE_OPTIONAL, "Load-Balancer host. Default is 127.0.0.1", "127.0.0.1")
			->addOption("port", null, InputOption::VALUE_OPTIONAL, "Load-Balancer port. Default is 31337", 3337)
			->addOption("workers", null, InputOption::VALUE_OPTIONAL, "Worker count. Default is 8. Should be minimum equal to the number of CPU cores.", 8)
			->addOption("app-env", null, InputOption::VALUE_OPTIONAL, "The environment that your application will use to bootstrap (if any)", "dev")
			->addOption("debug", null, InputOption::VALUE_OPTIONAL, "Activates debugging so that your application is more verbose, enables also hot-code reloading. 1|0", 1)
			->addOption("logging", null, InputOption::VALUE_OPTIONAL, "Deactivates the http logging to stdout. 1|0", 1)
			->addOption("static", null, InputOption::VALUE_OPTIONAL, "Deactivates the static file serving. 1|0", 1)
			->addOption("max-requests", null, InputOption::VALUE_OPTIONAL, "Max requests per worker until it will be restarted", 3000)
			->addOption("concurrent-requests", null, InputOption::VALUE_OPTIONAL, "If a worker is allowed to handle more than one request at the same time. This can lead to issues when the application does not support it but makes it faster. (like when they operate on globals at the same time) 1|0", 0)
			->addOption("cgi-path", null, InputOption::VALUE_OPTIONAL, "Full path to the php-cgi executable", false)
			->addOption("socket-path", null, InputOption::VALUE_OPTIONAL, "Path to a folder where socket files will be placed. Relative to working-directory or cwd()", "cache/ppm/");
	}

	/**
	 * @param InputInterface  $input
	 * @param OutputInterface $output
	 *
	 * @return int|null|void
	 * @throws \Interop\Container\Exception\ContainerException
	 */
	protected function execute(InputInterface $input, OutputInterface $output) {
		$cache = $this->container->get("cache");
		$log = $this->container->get("logger");

		$cronjobs = glob(__DIR__ . "/../Cron/*.php");
		foreach($cronjobs as $cronjob) {
			require_once($cronjob);
		}


	}
}