<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Doctrine;

use AppBundle\Entity\Address;
use AppBundle\Utils\LocationTools;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;

class LocationBuilderListener implements EventSubscriber
{
    /**
     * @var LocationTools
     */
    private $locationTools;

    public function __construct(LocationTools $locationTools)
    {
        $this->locationTools = $locationTools;
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof Address) {
            return;
        }
        $location = $this->locationTools->buildLocationTree($entity);

        $entity->setLocation($location);
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof Address) {
            return;
        }
        $location = $this->locationTools->buildLocationTree($entity);

        $entity->setLocation($location);
        // necessary to force the update to see the change
        $em = $args->getEntityManager();
        $meta = $em->getClassMetadata(get_class($entity));
        $em->getUnitOfWork()->recomputeSingleEntityChangeSet($meta, $entity);
    }

    public function getSubscribedEvents()
    {
        return ['prePersist', 'preUpdate'];
    }
}
