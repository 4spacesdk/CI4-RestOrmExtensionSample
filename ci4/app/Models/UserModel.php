<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class UserModel extends Model {

    public $hasOne = [
        ColorModel::class,
    ];

    public $hasMany = [
        RoleModel::class
    ];

}
