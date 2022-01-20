<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class NavigationModel extends Model {
    protected $table = 'ptv_navigation';
    protected $primaryKey = 'navigation_id';

    public $hasMany = [
        'sec' => [
            'class' => SectionModel::class,
            'joinTable' => 'ptv_navigation_sections',
            'otherField' => 'nav',
            'joinSelfAs' => 'navigation_fk',
            'joinOtherAs' => 'section_fk'
        ],
    ];
    public function getTableName() {
        return $this->table;
    }

}
