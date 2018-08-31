<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 30/08/2018
 * Time: 12:25
 */
class User {

    private $name;
    private $age;

    /**
     * User constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($property)
    {
        if(property_exists($this, $property)){
           return $this->$property;
        }


    }

    public function __set($property, $value)
    {
        if(property_exists($this, $property)){
            $this->$property = $value;
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }



}

$user1 = new User('Tomas', 20);
$user1->__set('age', 25);
echo $user1->__get('age');
var_dump($user1->__set('age', 25));