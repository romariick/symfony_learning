<?php


namespace OC\PlatformBundle\Listener;

use OC\PlatformBundle\Services\Tags;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class TagsListenerRequest {

   
    public function executeRequest(\Symfony\Component\HttpKernel\Event\GetResponseEvent $responseEvent) 
    {
        $responseEvent = $responseEvent->getRequest();
        
      //  var_dump($responseEvent);
        
    }
}
