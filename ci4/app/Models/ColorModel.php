<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class ColorModel extends Model {

    public $hasMany = [
        UserModel::class
    ];

}
