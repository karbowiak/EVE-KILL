<?php
namespace App\Tasks\CLI;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class RunQueue
 * @package App\Tasks\CLI
 */
class RunQueue extends Command {
	/**
	 *
	 */
	protected function configure() {
		$this
			->setName("run:queue")
			->setDescription("Run queue")
			->addOption("queue", null, InputOption::VALUE_REQUIRED, "The queue name for which it should be listening to..", array("rt", "high", "med", "low"));
	}

	/**
	 * @param InputInterface  $input
	 * @param OutputInterface $output
	 */
	protected function execute(InputInterface $input, OutputInterface $output) {
		require_once(__DIR__ . "/../../../vendor/chrisboulton/php-resque/lib/Resque.php");
		require_once(__DIR__ . "/../../../vendor/chrisboulton/php-resque/lib/Resque/Worker.php");

		$files = glob(__DIR__ . "/../Resque/*.php");
		foreach($files as $file)
			require_once($file);

		if(is_array($input->getOption("queue")))
			$queues = $input->getOption("queue");
		else
			$queues = array($input->getOption("queue"));

		$logLevel = \Resque_Worker::LOG_NORMAL;
		$interval = 1;
		$worker = new \Resque_Worker($queues);
		$worker->logLevel = $logLevel;
		$output->writeln("Starting Resque Worker");
		$worker->work($interval);
	}
}