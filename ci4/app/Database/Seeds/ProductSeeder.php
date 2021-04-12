<?php namespace App\Database\Seeds;

use App\Entities\Product;
use CodeIgniter\Database\Seeder;
use Config\Database;

class ProductSeeder extends Seeder {

    public function run() {
        Database::connect()->query("truncate products");
        for ($i = 0 ; $i < 1000 ; $i++) {
            $product = new Product();
            $product->title = "ProductSeeder-Product No. {$i}";
            $product->save();
        }
    }

}
