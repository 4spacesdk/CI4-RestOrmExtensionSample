<?php namespace App\Database\Seeds;

use App\Entities\User;
use CodeIgniter\Database\Seeder;
use Config\Database;

class ProductSeeder extends Seeder {

    public function run() {
        Database::connect()->query("truncate products");
        for ($i = 0 ; $i < 1000 ; $i++) {
            $product = new User();
            $product->title = "ProductSeeder-User No. {$i}";
            $product->save();
        }
    }

}
