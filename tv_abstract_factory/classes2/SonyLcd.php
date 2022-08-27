<?php

namespace classes2;

use interfaces\ILcd;

class SonyLcd implements ILcd
{
    public function produceLcd()
    {
        echo "New TV Sony LCD";
    }
}