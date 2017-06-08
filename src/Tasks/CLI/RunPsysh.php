<?php
namespace App\Tasks\CLI;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunPsysh extends Command {
	protected function configure() {
		$this
			->setName("run:psysh")
			->setDescription("Run psysh");
	}

	protected function execute(InputInterface $input, OutputInterface $output) {

	}
}