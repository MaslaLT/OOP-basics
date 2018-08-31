<?php
/**
 * Created by PhpStorm.
 * User: lazeris
 * Date: 30/08/2018
 * Time: 13:33
 */

class User
{
    protected $name;
    protected $age;

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

    protected function testing()
    {

    }
}

class Customer extends User
{
    private $balance;

    /**
     * Customer constructor.
     * @param $balance
     */
    public function __construct($name, $age, $balance)
    {
        parent::__construct($name,$age);
        $this->balance = $balance;
    }

    public function pay($amount)
    {
        return $this->name . ' paid $' . $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function changeName()
    {
        parent::testing();
    }

}

$customer1 = new Customer('Arturas', 35, 1000);

echo $customer1->pay(100);
echo '<br>';
echo $customer1->getBalance();
$customer1->changeName();