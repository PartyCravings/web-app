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

use AppBundle\Entity\File;
use Doctrine\ORM\EntityManagerInterface;
use Oneup\UploaderBundle\Event\PostChunkUploadEvent;

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
