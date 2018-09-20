<?php

namespace OC\PlatformBundle\Listener;

use Symfony\Component\HttpKernel\EventListener\SessionListener;

class SessionListenerCheck extends SessionListener
{
    public function onKernelResponse(\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
    }

    protected function getSession()
    {
    }

    public function lancer()
    {
        die('lance');
    }
}
