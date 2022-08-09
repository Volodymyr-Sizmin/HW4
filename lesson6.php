<?php
require_once __DIR__ . '/vendor/autoload.php';
//spl_autoload_register(function ($className){
//    $file = __DIR__.'/'.str_replace('\\', '/', $className).'.php';
//    if (!file_exists($file)){
//        throw new \InvalidArgumentException("Class [{$className}] doesn't exist in [{$file}] path");
//    }
//    require_once  $file;
//});

use classes\Currency;
use classes\Money;


try {
    $money = new Money("UAH", 350);
    $newMoney = new Money("USD", 250);
    if ($money->equals($newMoney)){
        echo "Objects are equal!" . "<br>";
    } else echo "Objects are different!" . "<br>";
    echo $money->add($newMoney);
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage() . "<br>";
}
