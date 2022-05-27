<?php namespace App\Models;

use RestExtension\Core\Model;

class RoleModel extends Model {

    public $hasOne = [

    ];

    public $hasMany = [
        UserModel::class,
    ];

}
