<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use OrmExtension\Migration\ColumnTypes;
use OrmExtension\Migration\Table;

class Addproducts extends Migration {

    public function up() {
        Table::init('products')
            ->create()
            ->column('title', ColumnTypes::VARCHAR_255);
    }

    public function down() {

    }

}
