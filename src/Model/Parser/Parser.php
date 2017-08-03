<?php
namespace App\Model\Parser;


use Slim\Container;

class Parser {

	/*
	 * entry file here..
	 * Do the mail processing here
	 * do victim processing in victim
	 * items in items, involved in involved and the dogma stuff from osmium in dogma..
	 *
	 * remember to store it in the database in several tables
	 *
	 * ala:
	 * k_kill
	 * k_inv_pilot
	 * k_inv_corp
	 * k_inv_alli
	 * k_items_dropped
	 * k_items_destroyed
	 * k_dogma
	 */

	/**
	 * @var Container
	 */
	protected $container;
	/**
	 * @var mixed
	 */
	protected $db;
	/**
	 * @var \Alliances|\App\Model\alliances|mixed
	 */
	protected $alliances;
	/**
	 * @var \App\Model\corporations|\Corporations|mixed
	 */
	protected $corporations;
	/**
	 * @var \App\Model\characters|\Characters|mixed
	 */
	protected $characters;
	/**
	 * @var \App\Model\factions|\Factions|mixed
	 */
	protected $factions;
	/**
	 * @var nullx27\ESI\Api\KillmailsApi
	 */
	protected $esi;

	public function __construct(Container $container) {
		$this->container = $container;
		$this->db = $container->get("db");
		$this->alliances = $container->get("alliances");
		$this->corporations = $container->get("corporations");
		$this->characters = $container->get("characters");
		$this->factions = $container->get("factions");
		$this->esi = new nullx27\ESI\Api\KillmailsApi(); <-- WAT?!
	}
}