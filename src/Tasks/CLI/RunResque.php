<?php
namespace App\Tasks\CLI;


use Slim\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunResque extends Command {
	protected $container;

	public function __construct(Container $container) {
		parent::__construct();
		$this->container = $container;
	}

	protected function configure() {
		$this
			->setName("run:resque")
			->setDescription("Run resque");
	}

	protected function execute(InputInterface $input, OutputInterface $output) {

	}
}