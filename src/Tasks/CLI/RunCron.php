<?php
namespace App\Tasks\CLI;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunCron extends Command {
	protected function configure() {
		$this
			->setName("run:cron")
			->setDescription("Run cronjobs");
	}

	protected function execute(InputInterface $input, OutputInterface $output) {

	}
}