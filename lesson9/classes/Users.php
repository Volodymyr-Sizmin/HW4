<?php
namespace classes;
require_once __DIR__.'/connection.php';
class Users
{
    public static function print_arr($arr)
    {
        echo "<pre>" . print_r($arr, true) . "</pre>";
    }

    public static function tableCreate($pdo)
    {
        $query = $pdo->prepare('CREATE TABLE users
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE)');
        $query->execute();
        header("Location: /form.php");
    }

    public static function newRow($pdo)
    {
        $query = $pdo->prepare("INSERT INTO users(name, surname, age, email) VALUES (:name, :surname, :age, :email)");
        $query->bindParam("name", $_POST['name']);
        $query->bindParam("surname", $_POST['surname']);
        $query->bindParam("age", $_POST['age']);
        $query->bindParam("email", $_POST['email']);
        $query->execute();
    }

    public static function getInfo($pdo)
    {
        $query = $pdo->prepare("SELECT * FROM users where id = $_POST[user] ");
        $query->execute();
        $data = $query->fetch();
        self::print_arr($data);
    }
    public static function deleteUser($pdo)
    {
        foreach ($_POST['user_delete'] as $item) {
            $query = $pdo->prepare("DELETE FROM users where id = $item");
            $query->execute();
            $data = $query->fetch();
            echo "<h4>User {$item} deleted!</h4> <br>";
        }
    }
}