<?php
namespace App\Tasks\CLI;


use Slim\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunWebsocket extends Command {
	protected $container;

	public function __construct(Container $container) {
		parent::__construct();
		$this->container = $container;
	}

	protected function configure() {
		$this
			->setName("run:ws")
			->setDescription("Run ws");
	}

	protected function execute(InputInterface $input, OutputInterface $output) {

	}
}