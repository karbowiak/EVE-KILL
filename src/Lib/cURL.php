<?php

namespace App\Lib;

use Symfony\Component\Cache\Adapter\AbstractAdapter;

/**
 * Class cURL
 * @package App\Lib
 */
class cURL {
	protected $cache;

	/**
	 * cURL constructor.
	 *
	 * @param AbstractAdapter $cache
	 */
	public function __construct(AbstractAdapter $cache) {
		$this->cache = $cache;
	}

	/**
	 * @param string $url
	 * @param int    $cacheTime
	 * @param array  $headers
	 *
	 * @return mixed
	 */
	public function getData(string $url, int $cacheTime = 30, array $headers = array()) {
		if($cacheTime > 0) {
			$md5 = md5($url);
			if($this->cache->hasItem($md5)) {
				return $this->cache->getItem($md5)->get();
			}
		}

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_SSL_VERIFYPEER => false, // Weirdness going on with PHP on Windows, so this
			CURLOPT_SSL_VERIFYHOST => false, // and this are required.. :\
			CURLOPT_USERAGENT => "Vee",
			CURLOPT_TIMEOUT => 30,
			CURLOPT_POST => false,
			CURLOPT_FORBID_REUSE => false,
			CURLOPT_ENCODING => "",
			CURLOPT_URL => $url,
			CURLOPT_HTTPHEADER => array_merge(array("Connection: keep-alive", "Keep-Alive: timeout=10, max=1000"), $headers),
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FAILONERROR  => true
		));

		$result = curl_exec($curl);

		if($cacheTime > 0) {
			$item = $this->cache->getItem($md5);
			$item->set($result);
			$item->expiresAfter($cacheTime);
			$this->cache->save($item);
		}

		return $result;
	}

	/**
	 * @param string $url
	 * @param array  $postData
	 * @param array  $headers
	 */
	public function postData(string $url, array $postData = array(), array $headers = array()) {
		// Define default headers
		if (empty($headers))
			$headers = array("Connection: keep-alive", "Keep-Alive: timeout=10, max=1000");

		// Init curl
		$curl = curl_init();

		// Init postLine
		$postLine = "";

		// Populate the $postData
		if (!empty($postData)) {
			foreach ($postData as $key => $value) {
				$postLine .= $key . "=" . $value . "&";
			}
		}

		rtrim($postLine, "&");
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_USERAGENT, "Vee");
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		if (!empty($postData)) {
			curl_setopt($curl, CURLOPT_POST, count($postData));
			curl_setopt($curl, CURLOPT_POSTFIELDS, $postLine);
		}
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);

		$result = curl_exec($curl);

		curl_close($curl);

		return $result;
	}

	/**
	 * @param string $url URL for Data to get
	 * @param string $storagePath Path for local storage of data
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function getDataStreamed(string $url, string $storagePath) {
		try {
			$opts = [
				"http" => [
					"method" => "GET",
					"header" => "User-Agent: Vee"
				]
			];

			$context = stream_context_create($opts);

			$read = fopen($url, "rb", false, $context);
			$write = fopen($storagePath, "w+b");

			if(!$read || !$write)
				return false;

			while(!feof($read)) {
				if(fwrite($write, fread($read, 4096)) == FALSE) {
					return false;
				}
			}

			fclose($read);
			fclose($write);

			return true;
		} catch(\Exception $e) {
			throw new \Exception("Error during transfer: {$e->getMessage()}");
		}
	}
}