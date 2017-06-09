<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 09-06-2017
 * Time: 12:47
 */

namespace App\Lib;


use Symfony\Component\Cache\Adapter\AbstractAdapter;

class cURL {
	protected $cache;

	public function __construct(AbstractAdapter $cache) {
		$this->cache = $cache;
	}

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

	public function postData(string $url, array $postData = array(), array $headers = array()) {

	}
}