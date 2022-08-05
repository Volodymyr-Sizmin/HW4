<?php

namespace classes;
use \Exception\InvalidArgumentException;

class Currency
{
    private $isoCode;

    public function __construct($isoCode)
    {
        $currencylist = ["USD", "EUR", "UAH", "CHF", "GBP", "JPY", "AUD"];
        if (!in_array($isoCode, $currencylist))
            throw new \InvalidArgumentException ("Accept only currencies in ISO 4217 format");
        $this->isoCode = $isoCode;
    }

    public function setIsoCode($isoCode): void
    {
        $this->isoCode = $isoCode;
    }
    public function getIsoCode()
    {
        return $this->isoCode;
    }
    public function equals($newMoney){
        if ($this->getIsoCode() != $newMoney->getIsoCode())
            echo "Currencies are not equal" . "<br>";
        else echo "Currencies are  equal" . "<br>";
        }
}





