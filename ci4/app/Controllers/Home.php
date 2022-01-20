<?php namespace App\Controllers;

use App\Entities\Navigation;
use DebugTool\Data;

class Home extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function issue21() {
        $navigation = new Navigation();
        $navigation->find(1);
        $navigation->secs->find();

        Data::set('navigation', $navigation->toArray());

        $this->response->setJSON(Data::getStore())->send();
    }

}
