<?php
echo "This file is located at: " . __FILE__;

abstract class Polygon {
    Abstract public function area(): float;
}
class Triangle extends Polygon {
    private float $base;
    private float $height;
    
    public function __construct(float $base, float $height) {
        $this->base=$base;
        $this->height=$height;
    }

    function area():float { 
        echo "The function name is " . __FUNCTION__ . "<br>";
        return 0.5 * $this->base * $this->height;

    }
}

$shapeTwo = new Triangle(5,2);
echo "The area of the trinagle is: " . $shapeTwo->area() . "<br>"; echo "typo in this line: " . __LINE__;
?>
