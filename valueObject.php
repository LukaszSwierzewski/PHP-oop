<?php

class Coordinates
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

function pin(Coordinates $coordinates)
{
    $coordinates->x;
}


function distance(Coordinates $first, Coordinates $second)
{
    var_dump($first);
    var_dump($second);
}

distance(new Coordinates(1, 2), new Coordinates(3, 4));
