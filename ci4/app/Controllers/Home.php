<?php namespace App\Controllers;

use App\Entities\C_Color;
use App\Entities\C_Role;
use App\Entities\C_User;
use App\Entities\Color;
use App\Entities\Role;
use App\Entities\User;
use App\Models\UserModel;
use CodeIgniter\Config\Services;
use DebugTool\Data;

class Home extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function test() {
        $this->testOneToMany();
        $this->testManyToOne();
        $this->testManyToMany();
        $this->testOneToMany_Custom();
        $this->testManyToOne_Custom();
        $this->testManyToMany_Custom();

        Services::response()->setJSON(Data::getStore());
        Services::response()->send();
    }

    private function testOneToMany() {
        Data::debug('');
        Data::debug('testOneToMany');

        $user = new User();
        $user->find(1);

        // Save relation
        $color = new Color();
        $color->name = 'testOneToMany';
        $color->save();
        $user->save($color);
        Data::lastQuery();

        // Fetch relation
        $user->color->find();
        Data::lastQuery();

        // Debug
        Data::debug($user->toArray());
    }

    private function testManyToOne() {
        Data::debug('');
        Data::debug('testManyToOne');

        $color = new Color();
        $color->find(1);

        // Save relation
        $user = new User();
        $user->name = 'testManyToOne';
        $user->save();
        $color->save($user);
        Data::lastQuery();

        // Fetch relation
        $color->users->find();
        Data::lastQuery();

        // Debug
        Data::debug($color->users->allToArray());
    }

    private function testManyToMany() {
        Data::debug('');
        Data::debug('testManyToMany');

        $user = new User();
        $user->find(1);
        $role = new Role();
        $role->find(1);

        // Save relation
        $user->save($role);
        Data::lastQuery();

        // Fetch relation
        $user->roles->find();
        Data::lastQuery();

        // Debug
        Data::debug($user->roles->allToArray());
    }

    private function testOneToMany_Custom() {
        Data::debug('');
        Data::debug('testOneToMany_Custom');

        $user = new C_User();
        $user->find(1);

        // Save relation
        $color = new C_Color();
        $color->name = 'testOneToMany';
        $color->save();
        $user->save($color);
        Data::lastQuery();

        // Fetch relation
        $user->c__color->find();
        Data::lastQuery();

        // Debug
        Data::debug($user->toArray());
    }

    private function testManyToOne_Custom() {
        Data::debug('');
        Data::debug('testManyToOne_Custom');

        $color = new C_Color();
        $color->find(1);

        // Save relation
        $user = new C_User();
        $user->name = 'testManyToOne';
        $user->save();
        $color->save($user);
        Data::lastQuery();

        // Fetch relation
        $color->c__users->find();
        Data::lastQuery();

        // Debug
        Data::debug($color->c__users->allToArray());
    }

    private function testManyToMany_Custom() {
        Data::debug('');
        Data::debug('testManyToMany_Custom');

        $user = new C_User();
        $user->find(1);
        $role = new C_Role();
        $role->find(1);

        // Save relation
        $user->save($role);
        Data::lastQuery();

        // Fetch relation
        $user->c__roles->find();
        Data::lastQuery();

        // Debug
        Data::debug($user->c__roles->allToArray());
    }

    public function testFindOnEmptyRelation() {
        Data::debug('');
        Data::debug('testFindOnEmptyRelation');

        $user = new User();
        $user->name = 'testFindOnEmptyRelation';
        $user->save();
        $user->color1->find();
        Data::lastQuery();

        Data::debug($user->toArray());
        Services::response()->setJSON(Data::getStore());
        Services::response()->send();
    }

}
