<?php namespace App\Models;

use RestExtension\Core\Model;

class C_RoleModel extends Model {

    protected $primaryKey = 'role';

    public $hasOne = [

    ];

    public $hasMany = [
        C_UserModel::class => [
            'joinTable' => 'c__roles_users',
            'joinSelfAs' => 'role_fk',
            'joinOtherAs' => 'user_fk',
        ],
    ];

}
