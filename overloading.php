<?php

class MyException extends Exception
{
    public function newMessage($i)
    {
        switch ($i) {
            case 1:
                echo "This method does not exists";
                break;
            case 2:
                echo "This variable does not exist";
                break;
            case 3:
                echo "Undefined exception";
                break;
        }
    }
}
class User
{
    private $name;
    private $age;
    private $email;
    public function __call(string $method, array $args)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else throw new MyException( "<b>$method</b> doesn't exist in class " . self::class);
    }
    private  function setName($name)
    {
        $this->name = $name;
    }
    private function setAge($age)
    {
       $this->age = $age;
    }
    public function getAll()
    {
        echo "Name: ".  $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
try {
    $user1 = new User;
    $user1->setName("John");
    $user1->setAge('252');
    $user1->getAll();
    $user1->setEmail('123@gmail.com');
} catch (Exception $e) {
    echo $e->getMessage() .  "<br>";
    echo "<hr>";
    echo "<br>";
    $e->NewMessage(1);
}

