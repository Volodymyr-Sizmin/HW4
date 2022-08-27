<?php

namespace classes2;

use interfaces\ILed;

class LgLed implements ILed
{
    public function produceLed()
    {
        echo "New TV LG LED";
    }
}