<?php

namespace classes2;

use interfaces\ProduceApp;
use interfaces\ILed;
use interfaces\ILcd;

class LgApp implements ProduceApp
{
    public function led(): ILed
    {
        return new LgLed();
    }
    public function lcd(): ILcd
    {
        return new LgLcd();
    }
}