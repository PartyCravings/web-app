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

class Quad
{
    public $data = [0, 0, 0, 0, 0, 0, 0, 0, 0];

    public function at($x, $y)
    {
        return $this->data[$x * 3 + $y];
    }
}
