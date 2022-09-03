<?php

namespace classes2;

use interfaces\ILed;

class SonyLed implements ILed
{
    public function produceLed()
    {
        echo "New TV Sony LED";
    }
}