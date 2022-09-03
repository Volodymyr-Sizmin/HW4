<?php

interface ITaxi
{
    public function carModel();
    public function price();
}

class EconomTaxi implements ITaxi
{
    public function CarModel()
    {
        echo'Lanos';
    }
    public function price()
    {
        echo '10$';
    }
}

class StandartTaxi implements ITaxi
{
    public function CarModel()
    {
        echo'Toyota';
    }
    public function price()
    {
        echo '20$';
    }
}

class PremiumTaxi implements ITaxi
{
    public function CarModel()
    {
        echo 'Tesla';
    }
    public function price()
    {
        echo '30$';
    }
}

abstract class ATaxiRide implements ITaxi
{
    abstract protected function callTaxi(): ITaxi;

    public function carModel()
    {
        $taxi = $this->callTaxi();
        $taxi->carModel();
    }

    public function price()
    {
        $taxi = $this->callTaxi();
        $taxi->price();
    }
}

class EconomDisp extends ATaxiRide
{
    protected function callTaxi(): ITaxi
    {
        return new EconomTaxi();
    }
}

class StandartDisp extends ATaxiRide
{
    protected function callTaxi(): ITaxi
    {
        return new StandartTaxi();
    }
}

class PremiumDisp extends ATaxiRide
{
    protected function callTaxi(): ITaxi
    {
        return new PremiumTaxi();
    }
}

function order(ATaxiRide $taxiRide)
{
    $taxiRide->price();
    echo "<br>";
    $taxiRide->carModel();
}

order(new StandartDisp());
echo "<br>";
order(new EconomDisp());
echo "<br>";
order(new PremiumDisp());