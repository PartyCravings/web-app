<?php

namespace AppBundle\Utils\Potracio;

class Opti
{
    public $pen = 0;
    public $c;
    public $t = 0;
    public $s = 0;
    public $alpha = 0;

    public function __construct()
    {
        $this->c = [new Point(), new Point()];
    }
}