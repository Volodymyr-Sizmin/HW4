<?php

namespace classes2;

use interfaces\ProduceApp;
use interfaces\ILed;
use interfaces\ILcd;


class SonyApp implements ProduceApp
{
    public function led(): ILed
    {
        return new SonyLed();
    }
    public function lcd(): ILcd
    {
        return new SonyLcd();
    }
}