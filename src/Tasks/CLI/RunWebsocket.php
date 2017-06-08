<?php
namespace App\Tasks\CLI;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunWebsocket extends Command {
	protected function configure() {
		$this
			->setName("run:ws")
			->setDescription("Run ws");
	}

	protected function execute(InputInterface $input, OutputInterface $output) {

	}
}