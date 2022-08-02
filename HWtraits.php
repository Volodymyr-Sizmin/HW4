<?php

trait Trait1
{
    public function test()
    {
        return '1';
    }

}

trait Trait2
{
    public function test()
    {
        return '2';
    }
}
trait Trait3
{
    public function test()
    {
        return  '3';
    }
}
class Test
{
    use Trait1, Trait2, Trait3
    {
        Trait1::test insteadof Trait2;
        Trait1::test insteadof Trait3;
        Trait2::test as test2;
        Trait3::test as test3;
    }
    public function getSum()
    {
        $sum = $this->test() + $this->test2() +$this->test3();
        return $sum;
    }

}

$obj1 = new Test();
echo $obj1->test();
echo "<br>";
echo $obj1->test2();
echo "<br>";
echo $obj1->test3();
echo "<br>";
echo $obj1->getSum();

