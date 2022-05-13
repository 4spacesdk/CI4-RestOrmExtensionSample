<?php namespace App\Controllers;

use App\Entities\Content;
use DebugTool\Data;

class Home extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function issue22() {
        $content = new Content();
        $content->find(1);
        $content->categs->find();
        Data::lastQuery();

        Data::set('content', $content->toArray());

        $this->response->setJSON(Data::getStore())->send();
    }

}
