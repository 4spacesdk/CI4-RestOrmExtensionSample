<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use OrmExtension\Migration\ColumnTypes;
use OrmExtension\Migration\Table;

class Adduserrolecolorexample extends Migration {

    public function up() {
        Table::init('users')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_511)
            ->column('color_id', ColumnTypes::INT);
        Table::init('roles')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_511);
        Table::init('roles_users')
            ->create()
            ->column('user_id', ColumnTypes::INT)
            ->column('role_id', ColumnTypes::INT);
        Table::init('colors')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_511);
    }

    public function down() {

    }

}
