<?php namespace App\Models;

use OrmExtension\Extensions\Model;

class CategoryModel extends Model {

    protected $table = 'categories';
    protected $primaryKey = 'id';

    public $hasMany = [
        'content' => [
            'class' => ContentModel::class,
            'joinTable' => 'categories_contents',
            'otherField' => 'categ',
            'joinSelfAs' => 'category_fk',
            'joinOtherAs' => 'content_fk'
        ],
    ];

}
