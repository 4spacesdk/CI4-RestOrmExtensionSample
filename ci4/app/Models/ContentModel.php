<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class ContentModel extends Model {
    protected $table = 'ptv_contents';
    protected $primaryKey = 'content_id';

    public $hasMany = [
        'nav' => [
            'class' => NavigationModel::class,
            'joinTable' => 'ptv_navigation_contents',
            'otherField' => 'cont',
            'joinSelfAs' => 'content_fk',
            'joinOtherAs' => 'navigation_fk'
        ],
    ];

    public function getTableName() {
        return $this->table;
    }

}
