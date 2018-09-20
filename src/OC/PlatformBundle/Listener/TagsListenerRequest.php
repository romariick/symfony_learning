<?php

namespace OC\PlatformBundle\Listener;

class TagsListenerRequest
{
    public function executeRequest(\Symfony\Component\HttpKernel\Event\GetResponseEvent $responseEvent)
    {
        $responseEvent = $responseEvent->getRequest();

        //  var_dump($responseEvent);
    }
}
