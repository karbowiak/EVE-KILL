<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class Alliances extends AbstractMigration
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
	    $table = $this->table("alliances");

	    $table->setOptions(array(
		    "engine" => "RocksDB",
		    "encoding" => "utf8",
		    "collation" => "utf8_bin"
	    ));

	    $table
		    ->addColumn("allianceID", "integer", array("limit" => 16))
		    ->addColumn("factionID", "integer", array("limit" => 16))
		    ->addColumn("allianceName", "string", array("limit" => 128))
		    ->addColumn("allianceTicker", "string", array("limit" => 8))
		    ->addColumn("executorCorporationID", "integer", array("limit" => 16))
		    ->addColumn('dateAdded', 'datetime', array('default' => 'CURRENT_TIMESTAMP'))
		    ->addColumn('lastUpdated', 'datetime', array('default' => '0000-00-00 00:00:00'))
		    ->addIndex(array("allianceID", "allianceName"), array("unique" => true))
		    ->addIndex(array("allianceName"))
		    ->addIndex(array("lastUpdated"))
		    ->save();
    }
}
