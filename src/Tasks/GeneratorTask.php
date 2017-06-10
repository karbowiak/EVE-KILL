<?php
namespace App\Tasks;

use gossi\codegen\generator\CodeFileGenerator;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpMethod;
use gossi\codegen\model\PhpParameter;
use gossi\codegen\model\PhpProperty;
use Slim\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GeneratorTask extends Command {
	/**
	 * @var Container
	 */
	protected $container;

	public function __construct(Container $container) {
		parent::__construct();
		$this->container = $container;
	}

	protected function configure() {
		$this
			->setName("generator")
			->setDescription("Generates Controllers / Helpers / Lib / Middleware / Tasks / Cronjobs / Resque / Websocket / CLI")
			->addOption("controller", "c", InputOption::VALUE_NONE, "Create Controller")
			->addOption("helper", "he", InputOption::VALUE_NONE, "Create Helper")
			->addOption("lib", "l", InputOption::VALUE_NONE, "Create Lib")
			->addOption("middleware", "m", InputOption::VALUE_NONE, "Create Middleware")
			->addOption("task", "t", InputOption::VALUE_NONE, "Create Task")
			->addOption("cronjob", "j", InputOption::VALUE_NONE, "Create Cronjob")
			->addOption("resque", "r", InputOption::VALUE_NONE, "Create Resque Queue")
			->addOption("websocket", "w", InputOption::VALUE_NONE, "Create WebSocket")
			->addOption("cli", "cl", InputOption::VALUE_NONE, "Create CLI")
			->addArgument("name", InputOption::VALUE_REQUIRED, "Name of the file you want to create")
			->addOption("subdir", "s", InputOption::VALUE_OPTIONAL, "Sub directory to put file under", null);
	}

	protected function execute(InputInterface $input, OutputInterface $output) {
		if($input->getOption("controller")) $this->generateController($input->getArgument("name"), $input, $output);
		elseif($input->getOption("helper")) $this->generateHelper($input->getArgument("name"), $input, $output);
		elseif($input->getOption("lib")) $this->generateLib($input->getArgument("name"), $input, $output);
		elseif($input->getOption("middleware")) $this->generateMiddleware($input->getArgument("name"), $input, $output);
		elseif($input->getOption("task")) $this->generateTask($input->getArgument("name"), $input, $output);
		elseif($input->getOption("cronjob")) $this->generateCronjob($input->getArgument("name"), $input, $output);
		elseif($input->getOption("resque")) $this->generateResque($input->getArgument("name"), $input, $output);
		elseif($input->getOption("websocket")) $this->generateWebSocket($input->getArgument("name"), $input, $output);
		elseif($input->getOption("cli")) $this->generateCLI($input->getArgument("name"), $input, $output);
		else
			$output->writeln("<info>Please refer to --help to utilize this generator</info>");
	}

	private function fileExists(string $directory, string $file, OutputInterface $output) {
		if(!file_exists($directory)) {
			mkdir($directory);
		}

		if(file_exists($directory . $file)) {
			$output->writeln("<error>Error, file already exists</error>");
			die();
		}
	}

	private function generateController(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Controller/{$sub}/" : __DIR__ . "/../Controller/";
		$file = ucfirst($name) . "Controller.php";
		$this->fileExists($path, $file, $output);

		$class = new PhpClass();
		$class->setQualifiedName(!empty($sub) ? "App\\Controller\\{$sub}\\" . ucfirst($name) . "Controller extends Controller" : "App\\Controller\\" . ucfirst($name) . "Controller extends Controller")
			->setMethod(PhpMethod::create("Example")
				->setBody("return \$this->json(array(\"heyo\" => \"wut\"));")
			)
			->declareUse("App\\Middleware\\Controller");

		$generator = new CodeFileGenerator();
		$code = $generator->generate($class);

		file_put_contents($path . $file, $code);
		$output->writeln("<info>Generated a controller in </info>{$path} <info>named</info> {$file}");
	}

	private function generateHelper(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Helper/{$sub}/" : __DIR__ . "/../Helper/";
		$file = ucfirst($name) . ".php";
		$this->fileExists($path, $file, $output);

		$class = new PhpClass();
		$class->setQualifiedName(!empty($sub) ? "App\\Helper\\{$sub}\\" . ucfirst($name) : "App\\Helper\\" . ucfirst($name))
			->setMethod(PhpMethod::create("__construct")
				->addParameter(PhpParameter::create("container")
					->setType("Container")
				)
				->setBody("\$this->container = \$container;")
			)
			->setProperty(PhpProperty::create("container")
				->setType("Slim\\Container")
				->setVisibility("protected")
			);

		$generator = new CodeFileGenerator();
		$code = $generator->generate($class);

		file_put_contents($path . $file, $code);
		$output->writeln("<info>Generated a helper in </info>{$path} <info>named</info> {$file}");
	}

	private function generateLib(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Lib/{$sub}/" : __DIR__ . "/../Lib/";
		$file = ucfirst($name) . ".php";
		$this->fileExists($path, $file, $output);

		$class = new PhpClass();
		$class->setQualifiedName(!empty($sub) ? "App\\Lib\\{$sub}\\" . ucfirst($name) : "App\\Lib\\" . ucfirst($name))
			->setMethod(PhpMethod::create("__construct"));

		$generator = new CodeFileGenerator();
		$code = $generator->generate($class);

		file_put_contents($path . $file, $code);
		$output->writeln("<info>Generated a library in </info>{$path} <info>named</info> {$file}");
	}

	private function generateMiddleware(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Middleware/{$sub}/" : __DIR__ . "/../Middleware/";
		$file = ucfirst($name) . ".php";
		$this->fileExists($path, $file, $output);

		$class = new PhpClass();
		$class->setQualifiedName(!empty($sub) ? "App\\MiddleWare\\{$sub}\\" . ucfirst($name) : "App\\MiddleWare\\" . ucfirst($name))
			->setMethod(PhpMethod::create("__construct")
				->addParameter(PhpParameter::create("app")
					->setType("App")
				)
				->setBody("\$this->app = \$app;")
			)
			->setMethod(PhpMethod::create("__invoke")
				->addParameter(PhpParameter::create("request")
					->setType("Request")
				)
				->addParameter(PhpParameter::create("response")
					->setType("Response")
				)
				->addParameter(PhpParameter::create("next"))
				->setBody("return \$next(\$request, \$response);")
			)
			->setProperty(PhpProperty::create("app")
				->setType("App")
				->setVisibility("protected")
			)->declareUse("Slim\\App;\nuse Slim\\Http\\Request;\nuse Slim\\Http\\Response");

		$generator = new CodeFileGenerator();
		$code = $generator->generate($class);

		file_put_contents($path . $file, $code);
		$output->writeln("<info>Generated a helper in </info>{$path} <info>named</info> {$file}");
	}

	private function generateTask(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Tasks/{$sub}/" : __DIR__ . "/../Tasks/";
		$file = ucfirst($name) . ".php";
		$this->fileExists($path, $file, $output);

		$class = new PhpClass();
		$class->setQualifiedName(!empty($sub) ? "App\\Tasks\\{$sub}\\" . ucfirst($name) . " extends Command": "App\\Tasks\\" . ucfirst($name) . " extends Command")
			->setMethod(PhpMethod::create("__construct")
				->addParameter(PhpParameter::create("container")
					->setType("Container")
				)
				->setBody("parent::__construct();\n\$this->container = \$container;")
			)
			->setMethod(PhpMethod::create("configure")
				->setBody("")
			)
			->setMethod(PhpMethod::create("execute")
				->addParameter(PhpParameter::create("input")
					->setType("InputInterface")
				)
				->addParameter(PhpParameter::create("output")
					->setType("OutputInterface")
				)
			)
			->setProperty(PhpProperty::create("container")
				->setType("Container")
				->setVisibility("protected")
			)->declareUse("Slim\\Container\nuse Symfony\Component\Console\Command\Command;\nuse Symfony\Component\Console\Input\InputInterface;\nuse Symfony\Component\Console\Input\InputOption;\nuse Symfony\Component\Console\Output\OutputInterface");

		$generator = new CodeFileGenerator();
		$code = $generator->generate($class);

		file_put_contents($path . $file, $code);
		$output->writeln("<info>Generated a Task in </info>{$path} <info>named</info> {$file}");
	}

	private function generateCronjob(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Tasks/Cron/{$sub}/" : __DIR__ . "/../Tasks/Cron/";
		$file = ucfirst($name) . ".php";
		$this->fileExists($path, $file, $output);

		//@todo write cronjob generator
	}

	private function generateResque(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Tasks/Resque/{$sub}/" : __DIR__ . "/../Tasks/Resque/";
		$file = ucfirst($name) . ".php";
		$this->fileExists($path, $file, $output);

		//@todo write resque generator
	}

	private function generateWebSocket(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Tasks/Websocket/{$sub}/" : __DIR__ . "/../Tasks/Websocket/";
		$file = ucfirst($name) . ".php";
		$this->fileExists($path, $file, $output);

		//@todo write websocket generator
	}

	private function generateCLI(string $name, InputInterface $input, OutputInterface $output) {
		$sub = $input->getOption("subdir");
		$path = !empty($sub) ? __DIR__ . "/../Tasks/CLI/{$sub}/" : __DIR__ . "/../Tasks/CLI/";
		$file = ucfirst($name) . ".php";
		$this->fileExists($path, $file, $output);

		$class = new PhpClass();
		$class->setQualifiedName(!empty($sub) ? "App\\Tasks\\CLI\\{$sub}\\" . ucfirst($name) . " extends Command": "App\\Tasks\\CLI\\" . ucfirst($name) . " extends Command")
			->setMethod(PhpMethod::create("__construct")
				->addParameter(PhpParameter::create("container")
					->setType("Container")
				)
				->setBody("parent::__construct();\n\$this->container = \$container;")
			)
			->setMethod(PhpMethod::create("configure")
				->setBody("")
			)
			->setMethod(PhpMethod::create("execute")
				->addParameter(PhpParameter::create("input")
					->setType("InputInterface")
				)
				->addParameter(PhpParameter::create("output")
					->setType("OutputInterface")
				)
			)
			->setProperty(PhpProperty::create("container")
				->setType("Container")
				->setVisibility("protected")
			)->declareUse("Slim\\Container\nuse Symfony\Component\Console\Command\Command;\nuse Symfony\Component\Console\Input\InputInterface;\nuse Symfony\Component\Console\Input\InputOption;\nuse Symfony\Component\Console\Output\OutputInterface");

		$generator = new CodeFileGenerator();
		$code = $generator->generate($class);

		file_put_contents($path . $file, $code);
		$output->writeln("<info>Generated a CLI Task in </info>{$path} <info>named</info> {$file}");
	}
}