<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class SectionModel extends Model {
    protected $table = 'ptv_sections';
    protected $primaryKey = 'section_id';

    public $hasMany = [
        'nav' => [
            'class' => NavigationModel::class,
            'joinTable' => 'ptv_navigation_sections',
            'otherField' => 'sec',
            'joinSelfAs' => 'section_fk',
            'joinOtherAs' => 'navigation_fk'
        ],
    ];

    public function getTableName() {
        return $this->table;
    }

}
