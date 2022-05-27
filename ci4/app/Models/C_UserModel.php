<?php namespace App\Models;

use RestExtension\Core\Model;

class C_UserModel extends Model {

    protected $primaryKey = 'user';

    public $hasOne = [
        C_ColorModel::class => [
            'joinSelfAs' => 'color',
            'joinOtherAs' => 'color_fk',
        ],
    ];

    public $hasMany = [
        C_RoleModel::class => [
            'joinTable' => 'c__roles_users',
            'joinSelfAs' => 'role_fk',
            'joinOtherAs' => 'user_fk',
        ],
    ];

}
