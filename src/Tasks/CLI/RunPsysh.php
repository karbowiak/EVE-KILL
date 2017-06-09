<?php
namespace App\Tasks\CLI;


use Slim\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunPsysh extends Command {
	protected $container;

	public function __construct(Container $container) {
		parent::__construct();
		$this->container = $container;
	}

	protected function configure() {
		$this
			->setName("run:psysh")
			->setDescription("Run psysh");
	}

	protected function execute(InputInterface $input, OutputInterface $output) {

	}
}