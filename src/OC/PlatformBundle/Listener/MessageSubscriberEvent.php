<?php


namespace OC\PlatformBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MessageSubscriberEvent implements EventSubscriberInterface
{
    public static function getSubscribedEvents() {
        
        return [
                'postCreate' => 'postCreate', 
                'postUpdate' => 'postUpdate'
        ];
    }
    public function postCreate(){
        die('Post create Ok');
    }
    
    public function postUpdate(){
        
    }
}
