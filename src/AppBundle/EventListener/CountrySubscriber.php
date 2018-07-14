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

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class CountrySubscriber implements EventSubscriberInterface
{
    public function onKernelRequest(GetResponseEvent $event) :void
    {
        $request = $event->getRequest();
        $country = $request->getHost();
        $request->attributes->set('_country', $country);
    }

    public static function getSubscribedEvents() :array
    {
        return [
            'kernel.request' => 'onKernelRequest',
        ];
    }
}
