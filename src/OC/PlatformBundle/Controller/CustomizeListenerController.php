<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PlatformBundle\Services\Tags;
use OC\PlatformBundle\Utils\PlatFormEvents;
use OC\PlatformBundle\Listener\MessageEvent;

class CustomizeListenerController extends controller
{
    public function constumizeListenerAction()
    {
        /**
         * 1- Recupération du service event_dispatcher
         * 2- Création du nouvel Object new MessageEvent qui ettend la class Event
         * 3 - Lancer le dispatch des évènement
         * 4 - Tags les services qu'il utilisent.
         */
        $disptacher = $this->get('event_dispatcher');
        $messageEvent = new MessageEvent();
        $disptacher->dispatch(PlatFormEvents::POST_MESSAGE);

        return new Response('<html><body>Costumize</body></html>');
    }
}
