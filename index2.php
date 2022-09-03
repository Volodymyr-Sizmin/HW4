<?php
require_once __DIR__ . '/vendor/autoload.php';

use classes2\BuildProduceOptions;
use classes2\LgApp;
use classes2\SonyApp;

BuildProduceOptions::render(new LgApp(), 'Led');
echo '<hr>';
BuildProduceOptions::render(new LgApp(), 'Lcd');
echo '<hr>';
BuildProduceOptions::render(new SonyApp(), 'Lcd');
echo '<hr>';
BuildProduceOptions::render(new SonyApp(), 'Led');
echo '<hr>';
