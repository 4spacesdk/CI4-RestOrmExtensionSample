<?php namespace App\Models;

use RestExtension\Core\Model;

class C_ColorModel extends Model {

    protected $primaryKey = 'color';

    public $hasOne = [

    ];

    public $hasMany = [
        C_UserModel::class => [
            'joinSelfAs' => 'color_fk',
            'joinOtherAs' => 'color',
        ],
    ];

}
