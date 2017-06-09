<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class Factions extends AbstractMigration
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
	    $table = $this->table("factions");

	    $table->setOptions(array(
		    "engine" => "RocksDB",
		    "encoding" => "utf8",
		    "collation" => "utf8_bin"
	    ));

	    $table
		    ->addColumn("factionID", "integer", array("limit" => 16))
		    ->addColumn("factionName", "string", array("limit" => 128))
		    ->addColumn("description", "text", array("limit" => MysqlAdapter::TEXT_MEDIUM))
		    ->addIndex(array("factionID"), array("unique" => true))
		    ->save();

    }
}
