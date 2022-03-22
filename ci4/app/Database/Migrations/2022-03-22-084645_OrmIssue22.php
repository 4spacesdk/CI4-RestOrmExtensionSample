<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Database;
use OrmExtension\Migration\ColumnTypes;
use OrmExtension\Migration\Table;

class OrmIssue22 extends Migration {

    public function up() {
        Table::init('ptv_contents')
            ->create('content_id');
        Table::init('ptv_navigation')
            ->create('navigation_id');
        Table::init('ptv_navigation_contents')
            ->create('nav_sec_id')
            ->column('navigation_fk', ColumnTypes::INT)
            ->column('content_fk', ColumnTypes::INT);

        Database::connect()->query("INSERT INTO `ptv_navigation` (`navigation_id`)
VALUES
	(1);
");
        Database::connect()->query("INSERT INTO `ptv_navigation_contents` (`nav_sec_id`, `navigation_fk`, `content_fk`)
VALUES
	(1, 1, 1),
	(2, 1, 2);
");
        Database::connect()->query("INSERT INTO `ptv_contents` (`content_id`)
VALUES
	(1),
	(2);
");
    }

    public function down() {

    }

}
