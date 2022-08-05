<?php
require_once "classes\Currency.php";
require_once "classes\Money.php";

use classes\Currency;
use classes\Money;


try {
    $money = new Money("USD", 250);
    $newMoney = new Money("USD", 250);
    $money->equals($newMoney);
    echo $money->add($newMoney);
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage() . "<br>";
}


