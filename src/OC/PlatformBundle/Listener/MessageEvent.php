<?php

namespace OC\PlatformBundle\Listener;

use Symfony\Component\EventDispatcher\Event;

class MessageEvent extends Event
{
    public function __construct()
    {
    }

    protected $message;

    public function getMessage()
    {
        die('iii');

        return $this->message;
    }

    public function setMessage($message)
    {
        die('i');
        $this->message = $message;
    }

    public function postMessagepostMessage()
    {
        die('i');
    }
}
