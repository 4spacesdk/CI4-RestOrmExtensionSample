<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class NavigationModel extends Model {
    protected $table = 'ptv_navigation';
    protected $primaryKey = 'navigation_id';

    public $hasMany = [
        'cont' => [
            'class' => ContentModel::class,
            'joinTable' => 'ptv_navigation_contents',
            'otherField' => 'nav',
            'joinSelfAs' => 'navigation_fk',
            'joinOtherAs' => 'content_fk'
        ],
    ];
    public function getTableName() {
        return $this->table;
    }

}
