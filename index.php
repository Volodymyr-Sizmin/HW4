<?php
class Colors
{

    private  function setRed($red)
    {
            if ($red < 0 or $red > 255)
            {
            throw new Exception("Only numbers from 0 to 255");
            }
            $this->red = $red;
    }

    private  function setGreen($green)
    {
        if ($green < 0 or $green > 255) {
            throw new Exception("Only numbers from 0 to 255");
        }
        $this->green = $green;
    }

    private  function setBlue($blue)
    {
        if ($blue < 0 or $blue > 255) {
            throw new Exception("Only numbers from 0 to 255");
        }
        $this->blue = $blue;
    }

    public function __construct(
        private int $red,
        private int $green,
        private int $blue)
    {
        $this->setRed($red);

        $this->setGreen($green);

        $this->setBlue($blue);

    }

    public function getRed()
    {
        return $this->red;
    }

    public function getGreen()
    {
        return $this->green;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public static function equals($obj1, $obj2)
    {
        if ($obj1 == $obj2) {
            return true;
        } else return false;
    }

    public static function random()
    {
        $rand1 = new Colors(rand(0, 255), rand(0, 255), rand(0, 255));
        return $rand1;
    }
   public function mix(self $color)
    {
        $value = ($color->getRed() + $color->getBlue() + $color->getGreen()) / 2;
   return new Colors($value, $value, $value);
}
 }
try {
    $color1 = new Colors(100,100,100);
    $color2 = new Colors(100, 100, 100);
    } catch (Exception $e) {
    echo $e->getmessage();
}
var_dump(Colors::equals($color1, $color2));
echo "<br>";
$color3 = Colors::random();
echo "<br>";
echo $color3->getRed()."<br>";
echo $color3->getGreen()."<br>";
echo $color3->getBlue()."<br>";
$color4 = new Colors(200, 200, 200);
$mixedColor = $color4->mix(new Colors(100, 100, 100));
echo $mixedColor->getRed()."<br>";
echo $mixedColor->getGreen()."<br>";
echo $mixedColor->getBlue()."<br>";


