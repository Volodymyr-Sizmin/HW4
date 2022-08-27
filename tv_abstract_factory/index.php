<?php
require_once '../vendor/autoload.php';

use classes2\BuildProduceOptions;
use сlasses2\LgApp;
use сlasses2\SonyApp;

BuildProduceOptions::render(new LgApp(), 'Led');
echo '<hr>';
BuildProduceOptions::render(new LgApp(), 'Lcd');
echo '<hr>';
BuildProduceOptions::render(new SonyApp(), 'Lcd');
echo '<hr>';
BuildProduceOptions::render(new SonyApp(), 'Led');
echo '<hr>';