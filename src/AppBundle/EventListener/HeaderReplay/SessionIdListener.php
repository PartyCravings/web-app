<?php

namespace AppBundle\EventListener\HeaderReplay;

use Terminal42\HeaderReplay\Event\HeaderReplayEvent;

class SessionIdListener
{
    public function onReplay(HeaderReplayEvent $event)
    {
        $request = $event->getRequest();
        
        if (null !== $request->cookies) {
            $headers = $event->getHeaders();
            $headers->set('PHPSESSID', $request->cookies->get('PHPSESSID'));
        }
    }
}
