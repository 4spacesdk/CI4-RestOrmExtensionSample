<?php namespace App\Controllers;

use App\Entities\Navigation;
use DebugTool\Data;

class Home extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function issue22() {
        $navigation = new Navigation();
        $navigation->find(1);
        $navigation->conts->find();
        Data::lastQuery();

        Data::set('navigation', $navigation->toArray());

        $this->response->setJSON(Data::getStore())->send();
    }

}
