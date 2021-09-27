<?php namespace App\Controllers;

use App\Models\ColorModel;
use App\Models\UserModel;
use CodeIgniter\Config\Services;

class Users extends BaseController {

    public function all() {
        $userModel = new UserModel();
        $users = $userModel
            ->whereRelated(ColorModel::class, 'name', 'green')
            ->find();

        Services::response()->setJSON($users->allToArray());
        Services::response()->send();
    }

}
