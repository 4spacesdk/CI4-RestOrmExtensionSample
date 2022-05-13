<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Database;
use OrmExtension\Migration\ColumnTypes;
use OrmExtension\Migration\Table;

class OrmIssue23 extends Migration {

    public function up() {
        Table::init('ptv_contents')
            ->column('name', ColumnTypes::VARCHAR_63);

        Table::init('attaches')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_63);
        Database::connect()->query("INSERT INTO `attaches` (`id`, `name`)
VALUES
	(1, 'Attach 1'),
	(2, 'Attach 2');
");

        Table::init('ptv_attaches_content')
            ->create()
            ->column('content_fk', ColumnTypes::INT)
            ->column('attach_fk', ColumnTypes::INT);
        Database::connect()->query("INSERT INTO `ptv_attaches_content` (`content_fk`, `attach_fk`)
VALUES
	(1, 1),
	(1, 2);
");
    }

    public function down() {

    }

}
