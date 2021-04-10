<?php

namespace Acme;

require 'ShapeInterface.php';
require 'Circle.php';
require 'Square.php';


class AreaCalculator
{
    public function calculate($shapes)
    {
        $area[] = $shapes->area();

        return var_dump(array_sum($area));
    }
}


$calc = new AreaCalculator();
$calc->calculate(new Circle(2));
$calc2 = new AreaCalculator();
$calc2->calculate(new Square(2, 10));
