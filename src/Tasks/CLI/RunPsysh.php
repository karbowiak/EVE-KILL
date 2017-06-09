<?php
namespace App\Tasks\CLI;


use Slim\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class RunPsysh
 * @package App\Tasks\CLI
 */
class RunPsysh extends Command {
	protected $container;

	/**
	 * RunPsysh constructor.
	 *
	 * @param Container $container
	 */
	public function __construct(Container $container) {
		parent::__construct();
		$this->container = $container;
	}

	protected function configure() {
		$this
			->setName("run:psysh")
			->setDescription("Run psysh");
	}

	/**
	 * @param InputInterface  $input
	 * @param OutputInterface $output
	 *
	 * @return int|null|void
	 */
	protected function execute(InputInterface $input, OutputInterface $output) {

	}
}