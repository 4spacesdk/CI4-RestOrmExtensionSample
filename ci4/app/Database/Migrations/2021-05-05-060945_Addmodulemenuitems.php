<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Module\Menu\Entities\Item;
use Module\Menu\Entities\MenuItem;
use Module\Menu\Models\MenuItemModel;
use OrmExtension\Migration\ColumnTypes;
use OrmExtension\Migration\Table;

class Addmodulemenuitems extends Migration {

    public function up() {
        Table::init('items')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_63)
            ->column('menu_item_id', ColumnTypes::INT);
        Table::init('menu_items')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_63);

        $menuItems = [
            'Frontpage',
            'Items',
        ];
        foreach ($menuItems as $menuItemName) {
            $menuItem = new MenuItem();
            $menuItem->name = $menuItemName;
            $menuItem->save();
        }

        $items = [
            'Item 1' => 'Frontpage',
            'Item 2' => 'Frontpage',
            'Item 3' => 'Items',
            'Item 4' => 'Items',
        ];
        foreach ($items as $itemName => $menuItemName) {
            /** @var MenuItem $menuItem */
            $menuItem = (new MenuItemModel())
                ->where('name', $menuItemName)
                ->find();
            $item = new Item();
            $item->name = $itemName;
            $item->menu_item_id = $menuItem->id;
            $item->save();
        }
    }

    public function down() {

    }

}
