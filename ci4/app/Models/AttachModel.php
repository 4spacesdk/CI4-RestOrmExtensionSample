<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class AttachModel extends Model {

    public $hasMany = [
        'cont' => [
            'class' => ContentModel::class,
            'joinTable' => 'ptv_attaches_content',
            'otherField' => 'att',
            'joinSelfAs' => 'attach_fk',
            'joinOtherAs' => 'content_fk'
        ],
    ];

}
