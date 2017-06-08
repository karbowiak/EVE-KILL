<?php
namespace App\Tasks\CLI;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunRedisQ extends Command {
	protected function configure() {
		$this
			->setName("run:redisq")
			->setDescription("Run redisq");
	}

	protected function execute(InputInterface $input, OutputInterface $output) {

	}
}