<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Utils\Potracio;

class Bitmap
{
    public $w;
    public $h;
    public $size;
    public $data;

    public function __construct($w, $h)
    {
        $this->w = $w;
        $this->h = $h;
        $this->size = $w * $h;
    }

    public function at($x, $y)
    {
        return ($x >= 0 && $x < $this->w && $y >= 0 && $y < $this->h) &&
            1 === $this->data[$this->w * $y + $x];
    }

    public function index($i)
    {
        $point = new Point();
        $point->y = floor($i / $this->w);
        $point->x = $i - $point->y * $this->w;

        return $point;
    }

    public function flip($x, $y)
    {
        if ($this->at($x, $y)) {
            $this->data[$this->w * $y + $x] = 0;
        } else {
            $this->data[$this->w * $y + $x] = 1;
        }
    }
}
