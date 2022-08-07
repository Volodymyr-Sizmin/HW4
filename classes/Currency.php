<?php

namespace classes;
use \Exception\InvalidArgumentException;

class Currency
{
    private $isoCode;
    const currencyList = ["USD", "EUR", "UAH", "CHF", "GBP", "JPY", "AUD"];

    public function __construct($isoCode)
    {
       $this->setIsoCode($isoCode);
    }

    public function setIsoCode($isoCode): void
    {
        if (!in_array($isoCode, Currency::currencyList))
        {
            throw new \InvalidArgumentException ("Accept only currencies in ISO 4217 format");
        }
        $this->isoCode = $isoCode;
    }

    public function getIsoCode()
    {
        return $this->isoCode;
    }

    public function equals($newMoney)
    {
        if ($this->getIsoCode() == $newMoney->getIsoCode())
            return true;
        return false;
    }
}
