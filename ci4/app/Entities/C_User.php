<?php namespace App\Entities;

use RestExtension\Core\Entity;

/**
 * Class C_User
 * @package App\Entities
 * @property string $name
 * @property int $color_fk
 * @property C_Color $c__color
 *
 * Many
 * @property C_Role $c__roles
 */
class C_User extends Entity {

}
