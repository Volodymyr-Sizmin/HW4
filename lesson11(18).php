<?php

interface Database
{
    public function getData();
}

class Mysql implements  Database
{
    public function getData()
    {
        return  'some data from database';
    }
}

class Controller
{
    private Database $adapter;

    public function __construct(Database $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        $this->adapter->getData($this);
    }
}
$contoler = new Controller(new Mysql());
echo $contoler->getData();
