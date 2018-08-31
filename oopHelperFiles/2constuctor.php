<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 30/08/2018
 * Time: 10:41
 */
//class users
class User
{
    private $name;
    private $age;

    public function __construct($name, $age){

        $this->name = $name;
        $this->age = $age;
    }


    public function introduction(){
        return $this->name . ' Says Hello.' . ' My age is ' . $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


}

$user1 = new User('Arturas', '23');
echo $user1->introduction();
echo $user1->getName();

$user2 = new User('julija', 30);