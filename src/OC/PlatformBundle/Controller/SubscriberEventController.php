<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubscriberEventController extends controller
{
    const POST_MESSAGE = 'postCreate';

    public function subscriberAction()
    {
        $eventDispatcher = $this->get('event_dispatcher');
        $eventDispatcher->dispatch(self::POST_MESSAGE);
    }
}
