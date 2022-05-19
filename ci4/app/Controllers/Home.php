<?php namespace App\Controllers;

use App\Entities\Content;
use App\Models\ContentModel;
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

    public function issue23() {
        $prev = new Content();
        $prev->find(1);
        $prev->atts->find();

        $new = new Content();
        $new->name = $prev->name;
        $new->save();
        $new->save($prev->atts, 'att');

        Data::set('content', $new->toArray());

        $this->response->setJSON(Data::getStore())->send();
    }

    public function issue24() {
        (new ContentModel())
            ->where('content_id', 1)
            ->find();
        Data::lastQuery();

        $this->response->setJSON(Data::getStore())->send();
    }

}
