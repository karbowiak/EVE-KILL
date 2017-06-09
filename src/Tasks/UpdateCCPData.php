<?php
namespace App\Tasks;

use App\Lib\cURL;
use App\Lib\Database;
use App\Model\Storage;
use Slim\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class UpdateCCPData
 * @package App\Tasks
 */
class UpdateCCPData extends Command {
	/**
	 * @var Container
	 */
	protected $container;
	/**
	 * @var Storage
	 */
	protected $storage;
	/**
	 * @var cURL
	 */
	protected $curl;
	/**
	 * @var Database
	 */
	protected $db;

	/**
	 * UpdateCCPData constructor.
	 *
	 * @param Container $container
	 *
	 * @throws \Interop\Container\Exception\ContainerException
	 */
	public function __construct(Container $container) {
		parent::__construct();
		$this->container = $container;
		$this->storage = $container->get("storage");
		$this->curl = $container->get("curl");
		$this->db = $container->get("db");
	}

	protected function configure() {
		$this
			->setName("update:ccp")
			->setDescription("Update the CCP Database tables.")
			->addOption("force", "f", InputOption::VALUE_NONE, "Force update database tables");
	}

	/**
	 * @param InputInterface  $input
	 * @param OutputInterface $output
	 *
	 * @return int|null|void
	 * @throws \Exception
	 */
	protected function execute(InputInterface $input, OutputInterface $output) {
		$dataURL = "https://www.fuzzwork.co.uk/dump/";
		$fileCacheDir = __DIR__ . "/../../cache";

		if(!file_exists($fileCacheDir))
			mkdir($fileCacheDir);

		$md5File = "mysql-latest.tar.bz2.md5";
		$md5 = explode(" ", $this->curl->getData($dataURL . $md5File, 0))[0];
		$lastSeenMd5 = $this->storage->getData("ccpDataMd5");

		if(($lastSeenMd5 !== $md5) || !$input->getOption("force") === false) {
			$output->writeln("<info>Updating to the latest CCP Data Dump</info>");
			$dbFiles = array(
				"dgmAttributeCategories",
				"dgmAttributeTypes",
				"dgmEffects",
				"dgmTypeAttributes",
				"dgmTypeEffects",
				"invFlags",
				"invGroups",
				"invTypes",
				"mapDenormalize",
				"mapRegions",
				"mapSolarSystems",
				"mapConstellations",
			);
			$type = ".sql.bz2";

			foreach($dbFiles as $file) {
				$output->writeln("<info>Updating</info> {$file}");
				$innerURL = "{$dataURL}latest/{$file}{$type}";

				try {
					file_put_contents("{$fileCacheDir}/{$file}{$type}", $this->curl->getData($innerURL, 0));
					$sqlData = bzopen("{$fileCacheDir}/{$file}{$type}", "r");

					$data = "";
					while(!feof($sqlData))
						$data .= bzread($sqlData, 4096);

					bzclose($sqlData);
				} catch (\Exception $e) {
					throw new \Exception($e->getMessage());
				}

				$data = str_replace("ENGINE=InnoDB", "ENGINE=RocksDB", $data);
				$data = explode(";\n", $data);
				foreach($data as $part) {
					if(!empty($part)) {
						$this->db->execute($part . ";");
					}
				}

				unlink("{$fileCacheDir}/{$file}{$type}");
			}

			$this->storage->insertData("ccpDataMd5", $md5);
		}
	}
}