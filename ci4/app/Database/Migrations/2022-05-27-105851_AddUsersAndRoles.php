<?php namespace App\Database\Migrations;

use App\Entities\C_Color;
use App\Entities\C_Role;
use App\Entities\C_User;
use App\Entities\Color;
use App\Entities\Role;
use App\Entities\User;
use CodeIgniter\Database\Migration;
use Config\Database;
use OrmExtension\Migration\ColumnTypes;
use OrmExtension\Migration\Table;

class AddUsersAndRoles extends Migration {

    public function up() {
        Table::init('users')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_255)
            ->column('color_id', ColumnTypes::INT);
        Table::init('roles')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_255);
        Table::init('colors')
            ->create()
            ->column('name', ColumnTypes::VARCHAR_255);
        Table::init('roles_users')
            ->create()
            ->column('role_id', ColumnTypes::INT)
            ->column('user_id', ColumnTypes::INT);

        $user = new User();
        $user->name = 'User 1';
        $user->color_id = 1;
        $user->save();

        $role = new Role();
        $role->name = 'Role 1';
        $role->save();

        $color = new Color();
        $color->name = 'Color 1';
        $color->save();

        Database::connect()->query('insert into roles_users (role_id, user_id) values (1, 1)');


        Table::init('c__users')
            ->create('user')
            ->column('name', ColumnTypes::VARCHAR_255)
            ->column('color_fk', ColumnTypes::INT);
        Table::init('c__roles')
            ->create('role')
            ->column('name', ColumnTypes::VARCHAR_255);
        Table::init('c__colors')
            ->create('color')
            ->column('name', ColumnTypes::VARCHAR_255);
        Table::init('c__roles_users')
            ->create('roles_user')
            ->column('role_fk', ColumnTypes::INT)
            ->column('user_fk', ColumnTypes::INT);

        $user = new C_User();
        $user->name = 'User 1';
        $user->color_fk = 1;
        $user->save();

        $role = new C_Role();
        $role->name = 'Role 1';
        $role->save();

        $color = new C_Color();
        $color->name = 'Color 1';
        $color->save();

        Database::connect()->query('insert into c_roles_users (role_fk, user_fk) values (1, 1)');
    }

    public function down() {

    }

}
