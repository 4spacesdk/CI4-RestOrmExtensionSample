<?php namespace App\Models;

use RestExtension\Core\Model;

class UserModel extends Model {

    public $hasOne = [
        ColorModel::class,
        'color1' => [
            'class' => ColorModel::class,
            'otherField' => 'user_color1',
            'joinSelfAs' => 'id',
            'joinOtherAs' => 'color_id',
        ]
    ];

    public $hasMany = [
        RoleModel::class,
    ];

}
