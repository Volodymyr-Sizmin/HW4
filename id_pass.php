<?php
class User
{

    public function __construct(
        public  $id,
        public string $email,
        public string $pass){
        if (!is_int($id)) {
            throw new Exception("Integer only! ");
        }
        if (strlen($pass)>8) {
            throw new Exception("8 digits only! ");
        }
    }
    public function getUserData(){
        return "id:{$this->id} <br> 
                email: {$this->email} <br>";
  }

}
try{
    $user1 = new User(111,"123@gmail.com", "qwertyfghght");
    echo $user1->getUserData();
} catch (Exception $e) {
    echo $e->getMessage() . "Exception was made in file: "
        . $e->getFile() . " on line: " . $e->getLine();
}
