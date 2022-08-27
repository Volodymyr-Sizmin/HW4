<?php

namespace classes2;

use interfaces\ILcd;

class LgLcd implements ILcd
{
    public function produceLcd()
    {
        echo "New TV LG LCD";
    }
}