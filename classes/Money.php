<?php

namespace classes;
require_once "Currency.php";
use classes\Currency;
use \Exception\InvalidArgumentException;

class Money extends Currency
{
    private $amount;
    protected Currency $currency;

    public function __construct($isoCode, $amount)
    {
        parent::__construct($isoCode);
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function equals($newMoney)
    {
        parent::equals($newMoney);
        if  ($this->amount != $newMoney->amount)
            echo "Amount is different." . "<br>";
        else
            echo "Amount is equal" . "<br>";
    }

    public function add($newMoney)
    {
        if ($this->getIsoCode() != $newMoney->getIsoCode())
            throw new \InvalidArgumentException("Imposible to add different curencies to each other!");
        $sum = $this->amount + $newMoney->amount;
        return  "The sum equals:  " . $sum . $this->getIsoCode() . "<br>";
    }
}







