<?php

namespace AppBundle\Utils\Potracio;

class Path
{
    public $area = 0;
    public $len = 0;
    public $curve = [];
    public $pt = [];
    public $minX = 100000;
    public $minY = 100000;
    public $maxX = -1;
    public $maxY = -1;
    public $sum = [];
    public $lon = [];
}