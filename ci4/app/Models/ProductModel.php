<?php namespace App\Models;

use RestExtension\Core\Model;
use RestExtension\ResourceModelInterface;

class ProductModel extends Model implements ResourceModelInterface {

    public function preRestGet($queryParser, $id) {
        // TODO: Implement preRestGet() method.
    }

    public function postRestGet($queryParser, $items) {
        // TODO: Implement postRestGet() method.
    }

    public function isRestCreationAllowed($item): bool {
        // TODO: Implement isRestCreationAllowed() method.
    }

    public function isRestUpdateAllowed($item): bool {
        // TODO: Implement isRestUpdateAllowed() method.
    }

    public function isRestDeleteAllowed($item): bool {
        // TODO: Implement isRestDeleteAllowed() method.
    }

    public function appleRestGetManyRelations($items) {
        // TODO: Implement appleRestGetManyRelations() method.
    }
}
