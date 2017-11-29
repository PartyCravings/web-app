<?php

namespace AppBundle\EventListener;

use Oneup\UploaderBundle\Event\PostChunkUploadEvent;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\File;

class UploadListener
{
    protected $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function onUpload(PostChunkUploadEvent $event)
    {
        if ($event->isLast()) {
            $file = $event->getChunk();
            
            $object = new File();
            $object->setName($file->getName())
                ->setSize($file->getSize())
                ->setUpdated(new \DateTime())
                ->setOriginalName($file->getName());

            $this->manager->persist($object);
            $this->manager->flush();

            $session = $event->getRequest()->getSession();

            $sessionVal = $session->get('files[]');
            // Append value to retrieved array.
            $sessionVal[] = $object;
            // Set value back to session
            $session->set('files[]', $sessionVal);
            dump($object);
        }
    }
}
