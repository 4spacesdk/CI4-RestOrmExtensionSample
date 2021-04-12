<?php namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;
use Psr\Log\LoggerInterface;
use RestExtension\QueryParser;

class Products extends BaseController {

    public QueryParser $queryParser;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {
        parent::initController($request, $response, $logger);

        $this->queryParser = new QueryParser();
        $this->queryParser->parseRequest($request);
    }

    public function get($id = 0) {
        $items = (new ProductModel())->restGet($id, $this->queryParser);

        Services::response()->setJSON($items->allToArray());
        Services::response()->send();
    }

}
