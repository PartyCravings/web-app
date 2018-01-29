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

class Curve
{
    public $n;
    public $tag;
    public $c;
    public $alphaCurve = 0;
    public $vertex;
    public $alpha;
    public $alpha0;
    public $beta;

    public function __construct($n)
    {
        $this->n = $n;
        $this->tag = array_fill(0, $n, null);
        $this->c = array_fill(0, $n * 3, null);
        $this->vertex = array_fill(0, $n, null);
        $this->alpha = array_fill(0, $n, null);
        $this->alpha0 = array_fill(0, $n, null);
        $this->beta = array_fill(0, $n, null);
    }
}
