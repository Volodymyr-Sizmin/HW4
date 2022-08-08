<?php
require_once "classes\Currency.php";
require_once "classes\Money.php";

use classes\Currency;
use classes\Money;


try {
    $money = new Money("USD", 350);
    $newMoney = new Money("USD", 250);
    if ($money->equals($newMoney)){
        echo "Objects are equal!" . "<br>";
    } else echo "Objects are different!" . "<br>";
    echo $money->add($newMoney);
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage() . "<br>";
}
