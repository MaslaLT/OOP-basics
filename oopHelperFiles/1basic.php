<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 30/08/2018
 * Time: 10:39
 */

<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 30/08/2018
 * Time: 10:06
 */

class User{
    public $name;

    public function sayHello()
    {
        return $this->name .' Says Hello';
    }
}

$user1 = new User();
$user1->name = 'Jonas';

echo $user1->sayHello();