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
        'categ' => [
            'class' => CategoryModel::class,
            'joinTable' => 'categories_contents',
            'otherField' => 'content',
            'joinSelfAs' => 'content_fk',
            'joinOtherAs' => 'category_fk'
        ],
        'att' => [
            'class' => AttachModel::class,
            'joinTable' => 'ptv_attaches_content',
            'otherField' => 'cont',
            'joinSelfAs' => 'content_fk',
            'joinOtherAs' => 'attach_fk'
        ],
    ];

    public function getTableName() {
        return $this->table;
    }

}
