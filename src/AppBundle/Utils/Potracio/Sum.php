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

class Sum
{
    public $x;
    public $y;
    public $xy;
    public $x2;
    public $y2;

    public function __construct($x, $y, $xy, $x2, $y2)
    {
        $this->x = $x;
        $this->y = $y;
        $this->xy = $xy;
        $this->x2 = $x2;
        $this->y2 = $y2;
    }
}
