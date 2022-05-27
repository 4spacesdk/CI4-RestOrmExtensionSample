<?php namespace App\Models;

use RestExtension\Core\Model;

class ColorModel extends Model {

    public $hasOne = [

    ];

    public $hasMany = [
        UserModel::class,
    ];

}
