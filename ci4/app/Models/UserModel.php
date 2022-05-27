<?php namespace App\Models;

use RestExtension\Core\Model;

class UserModel extends Model {

    public $hasOne = [
        ColorModel::class,
    ];

    public $hasMany = [
        RoleModel::class,
    ];

}
