<?php
class Logger
{
    private  $format;
    private  $delivery;

    public function __construct(IFormat $format, IDeliver $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $this->delivery->printFormat($this->format->format($string));
    }
}
interface IFormat
{
public function format($string);
}

interface iDeliver
{
public function printFormat($string);
}
class RawFormat implements iFormat
{
    public function format($string)
    {
        return $string;
    }
}

class WithDate implements iFormat
{
    public function format($string)
    {
        return Date('Y-m-d H:i:s ') .  $string;
    }
}

class WithDateAndDetails implements iFormat
{
    public function format($string)
    {
        return Date('Y-m-d H:i:s ') .  $string . ' - With some details';
    }
}
class DeliverBySms implements IDeliver
{
    public function printFormat($string)
    {
        echo "Output format ({$string})  by SMS";
    }
}

class DeliverByEmail implements IDeliver
{
    public function printFormat($string)
    {
        echo "Output format ({$string})  by Email";
    }
}

class DeliverToConsole implements IDeliver
{
    public function printFormat($string)
    {
        echo "Output format ({$string})  to Console";
    }
}
$logger = new Logger(new WithDateAndDetails(), new DeliverToConsole());
$logger->log('Emergency error! Please fix me!');
