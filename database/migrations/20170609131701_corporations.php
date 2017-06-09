<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class Corporations extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change() {
	    $table = $this->table("corporations");

	    $table->setOptions(array(
		    "engine" => "RocksDB",
		    "encoding" => "utf8",
		    "collation" => "utf8_bin"
	    ));

	    $table
		    ->addColumn("corporationID", "integer", array("limit" => 16))
		    ->addColumn("allianceID", "integer", array("limit" => 16))
		    ->addColumn("factionID", "integer", array("limit" => 16))
		    ->addColumn("corporationName", "string", array("limit" => 128))
		    ->addColumn("ceoID", "integer", array("limit" => 16))
		    ->addColumn("corpTicker", "string", array("limit" => 6))
		    ->addColumn("memberCount", "integer", array("limit" => 5))
		    ->addColumn('description', 'text', array("limit" => MysqlAdapter::TEXT_MEDIUM))
		    ->addColumn("creationDate", "datetime", array("default" => "0000-00-00 00:00:00"))
		    ->addColumn("creatorCharacterID", "integer", array("limit" => 16))
		    ->addColumn('dateAdded', 'datetime', array('default' => 'CURRENT_TIMESTAMP'))
		    ->addColumn('lastUpdated', 'datetime', array('default' => '0000-00-00 00:00:00'))
		    ->addIndex(array("corporationID"), array("unique" => true))
		    ->addIndex(array("allianceID"))
		    ->addIndex(array("corporationName"))
		    ->addIndex(array("lastUpdated"))
		    ->save();
    }
}
