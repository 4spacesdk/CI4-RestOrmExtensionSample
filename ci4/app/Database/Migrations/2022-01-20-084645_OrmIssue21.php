<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Database;
use OrmExtension\Migration\ColumnTypes;
use OrmExtension\Migration\Table;

class OrmIssue21 extends Migration {

    public function up() {
        Table::init('ptv_navigation_sections')
            ->create('nav_sec_id')
            ->column('navigation_fk', ColumnTypes::INT)
            ->column('section_fk', ColumnTypes::INT);
        Table::init('ptv_sections')
            ->create('section_id');
        Table::init('ptv_navigation')
            ->create('navigation_id');

        Database::connect()->query("INSERT INTO `ptv_navigation` (`navigation_id`)
VALUES
	(1);
");
        Database::connect()->query("INSERT INTO `ptv_navigation_sections` (`nav_sec_id`, `navigation_fk`, `section_fk`)
VALUES
	(1, 1, 1),
	(2, 1, 2);
");
        Database::connect()->query("INSERT INTO `ptv_sections` (`section_id`)
VALUES
	(1),
	(2);
");
    }

    public function down() {

    }

}
