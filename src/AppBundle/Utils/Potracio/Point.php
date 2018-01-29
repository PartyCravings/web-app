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

class Point
{
    public $x;
    public $y;

    public function __construct($x = null, $y = null)
    {
        if (null !== $x) {
            $this->x = $x;
        }
        if (null !== $y) {
            $this->y = $y;
        }
    }
}
