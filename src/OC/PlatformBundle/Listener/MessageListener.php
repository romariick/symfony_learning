<?php

namespace OC\PlatformBundle\Listener;

class MessageListener {

    public function postMessage() 
    {
        die('constumize message Ok');        
        return 'Post message';
    }
}
