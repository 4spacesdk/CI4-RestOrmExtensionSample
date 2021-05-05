<?php namespace Module\Menu\Models;

use OrmExtension\Extensions\Model;

class ItemModel extends Model {

    public $hasOne = [
        MenuItemModel::class,
    ];

}
