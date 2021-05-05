<?php namespace Module\Menu\Models;

use OrmExtension\Extensions\Model;

class MenuItemModel extends Model {

    public $hasMany = [
        ItemModel::class,
    ];

}
