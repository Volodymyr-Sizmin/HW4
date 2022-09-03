<?php

namespace interfaces;

interface ProduceApp
{
    public function led(): ILed;
    public function lcd(): ILcd;
}