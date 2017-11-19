<?php

namespace AppBundle\EventListener;

use Vich\UploaderBundle\Event\Event;
use AppBundle\Utils\Potracio\Potracio;

class SilhouetteCreationListener
{

    public function onVichUploaderPreUpload(Event $event)
    {
        $object = $event->getObject();
        

        if(0 === strpos($object->getActualFile()->getMimetype(), 'image')){
        	$potracio = new Potracio();

        	$potracio->loadImageFromFile($object->getActualFile());

        	$potracio->process();

        	$object->setSilhouette($potracio->getSVG(1));
        }
        // do your stuff with $object and/or $mapping...
    }

}