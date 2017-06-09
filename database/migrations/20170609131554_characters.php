<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class Characters extends AbstractMigration
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
	    $table = $this->table("characters");

	    $table->setOptions(array(
		    "engine" => "RocksDB",
		    "encoding" => "utf8",
		    "collation" => "utf8_bin"
	    ));

	    $table
		    ->addColumn("characterID", "integer", array("limit" => 16))
		    ->addColumn("corporationID", "integer", array("limit" => 16))
		    ->addColumn("allianceID", "integer", array("limit" => 16))
		    ->addColumn("factionID", "integer", array("limit" => 16))
		    ->addColumn("characterName", "string", array("limit" => 128))
		    ->addColumn('history', 'text', array("limit" => MysqlAdapter::TEXT_MEDIUM))
		    ->addColumn('dateAdded', 'datetime', array('default' => 'CURRENT_TIMESTAMP'))
		    ->addColumn('lastUpdated', 'datetime', array('default' => '0000-00-00 00:00:00'))
		    ->addIndex(array("characterID", "characterName"), array("unique" => true))
		    ->addIndex(array("corporationID"))
		    ->addIndex(array("allianceID"))
		    ->addIndex(array("characterName"))
		    ->addIndex(array("lastUpdated"))
		    ->save();
    }
}
