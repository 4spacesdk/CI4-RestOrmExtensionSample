<?php namespace App\Entities;

use RestExtension\Core\Entity;

/**
 * Class User
 * @package App\Entities
 * @property string $name
 * @property int $color_id
 * @property Color $color
 * @property Color $color1
 *
 * Many
 * @property Role $roles
 */
class User extends Entity {

}
