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
