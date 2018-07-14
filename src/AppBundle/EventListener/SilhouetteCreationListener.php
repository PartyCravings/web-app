<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\EventListener;

use AppBundle\Utils\Potracio\Potracio;
use Vich\UploaderBundle\Event\Event;

class SilhouetteCreationListener
{
    /**
     * @Deprecated , Use cropped JPGs of lower quality, 10%?
     */
    public function onVichUploaderPreUpload(Event $event) :void
    {
        /*$object = $event->getObject();

        if (0 === mb_strpos($object->getActualFile()->getClientMimeType(), 'image')) {
            $potracio = new Potracio();
            $potracio->loadImageFromFile($object->getActualFile());
            $potracio->process();
            $object->setSilhouette($potracio->getSVG(1));
        }*/
        // do your stuff with $object and/or $mapping...
    }
}
