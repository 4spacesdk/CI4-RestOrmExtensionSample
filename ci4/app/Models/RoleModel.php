<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class RoleModel extends Model {

    public $hasMany = [
        UserModel::class
    ];

}
