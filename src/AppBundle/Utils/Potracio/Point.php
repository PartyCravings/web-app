<?php

namespace AppBundle\Utils\Potracio;

class Point
{
    public $x;
    public $y;

    public function __construct($x = null, $y = null)
    {
        if ($x !== null) {
            $this->x = $x;
        }
        if ($y !== null) {
            $this->y = $y;
        }
    }
}