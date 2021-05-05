<?php namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;
use Module\Menu\Models\ItemModel;
use Module\Menu\Models\MenuItemModel;
use Psr\Log\LoggerInterface;
use RestExtension\QueryParser;

class NamespaceIssue extends BaseController {

    public function index() {
        $items = (new ItemModel())
            ->includeRelated(MenuItemModel::class)
            ->find();

        echo $items->count();
    }

}
