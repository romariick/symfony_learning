<?php


namespace OC\PlatformBundle\Listener;

use OC\PlatformBundle\Services\Tags;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class TagsListener {

    public function __construct(Tags $tags) {
        $this->tags = $tags;
    }

    public function executeTags(FilterResponseEvent $responseEvent) 
    {
        
        $responseEvent = $responseEvent->getResponse();
        $responseEvent->setContent('<html><body>Hello    compile</body></html>');
          
       //   return $responseEvent;
    }
}
