<?php namespace App\Models;

use RestExtension\Core\Model;

class ColorModel extends Model {

    public $hasOne = [

    ];

    public $hasMany = [
        UserModel::class,
        'user_color1' => [
            'class' => UserModel::class,
            'otherField' => 'color1',
            'joinTable' => 'users',
            'joinSelfAs' => 'color_id',
            'joinOtherAs' => 'id',
        ],
    ];

}
