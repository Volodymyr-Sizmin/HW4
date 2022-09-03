<?php

namespace classes2;

use interfaces\ProduceApp;

class BuildProduceOptions
{
    public static function render(ProduceApp $app, $produceType)
    {
        $object = call_user_func([$app, $produceType]);
        call_user_func([$object, "produce" . $produceType]);
    }
}